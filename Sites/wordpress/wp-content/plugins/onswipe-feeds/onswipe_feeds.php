<?php
/*
  Plugin Name: Onswipe Feeds
  Plugin URI: http://wordpress.org/extend/plugins/onswipe-feeds/
  Description: This adds either the featured image (preferred) or the first image in the post to the RSS feed. Also enumerates gallery images in &lt;media:content&gt; tags.
  Version: 1.1
  Author: Frank Pinto
  Acknowledgements: Andy Skelton

  This adds either the featured image (preferred) or the first image in the
  post to the RSS feed. Also enumerates gallery images in media:content tags.
  Code taken from Andy Skelton's MRSS and Dinesh Karki's "Featured Image in
  RSS Feeds" plugins
*/

add_action('template_redirect', 'osfeeds_init');

function do_feed_onswipe()
{
  load_template(dirname(__FILE__).'/feed-template.php' );
}

function osfeeds_init()
{
  if ( ! is_feed() )
    return;

  // If the feed being requested isn't the onswipe one or mrss=off is included
  // in the address bar then don't do anything
  if ((isset($_GET['feed']) && $_GET['feed'] != 'onswipe') || (isset($_GET['mrss']) && $_GET['mrss'] == 'off'))
    return;

  add_action('do_feed_onswipe', 'do_feed_onswipe', 10, 0);
  add_action('rss2_ns', 'osfeeds_ns');
  add_action('rss2_item', 'osfeeds_item', 10, 0);
}

function osfeeds_ns()
{
?>

  xmlns:media="http://search.yahoo.com/mrss/"
<?php
}

function osfeeds_item()
{
  global $osfeeds_gallery_lookup;
  $media = array();

  // Honor the feed settings. Don't include any media that isn't in the feed.
  if (!strlen(get_the_content())) {
    $content = the_excerpt_rss();
  } else {
    // When a gallery in a post is processed wp_get_attachment_link is run for
    // each picture. Get the $id for each picture.
    // $lookup = ('dom.com/wp-content...' => 13,'dom.com/wp-content...' => 16)
    add_filter( 'wp_get_attachment_link', 'osfeeds_gallery_lookup', 10, 5 );
    $content = apply_filters( 'the_content', get_the_content() );
    remove_filter( 'wp_get_attachment_link', 'osfeeds_gallery_lookup', 10, 5 );
    $lookup = $osfeeds_gallery_lookup;
    unset($osfeeds_gallery_lookup);
  }

  // Use featured image if it has one.
  global $post;
  if (has_post_thumbnail($post->ID))
  {
    // Get featured image as thumbnail if possible, else use attachment
    // thumbnail/full
    //$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');
    //if (!empty($thumbnail))
    //  $media[]['thumbnail']['attr']['url'] = $thumbnail[0];

    // Make the featured image the first media:content item.
    $thumbnail_id = get_post_thumbnail_id($post->ID);
    $featured_src = wp_get_attachment_image_src($thumbnail_id, 'full');
    $attributes = osfeeds_attachment_attributes($thumbnail_id, $featured_src[0]);
    $featured_item = assemble_featured($featured_src[0], $attributes);
    $media[] = $featured_item;
  }

  // Extract img tag attributes
  $images = 0;
  if ( preg_match_all('/<img (.+?)>/', $content, $matches) ) {
    foreach ( $matches[1] as $attrs ) {
      $item = $img = array();

      // Construct $img array from <img> attributes
      // Produces $img = ('alt' => 'val1', 'src' => 'val2', 'title' => 'val3', etc)
      foreach ( wp_kses_hair($attrs, array('http')) as $attr )
        $img[$attr['name']] = $attr['value'];

      // Get absolute URL of image
      if (!isset($img['src']))
        continue;
      $img['src'] = osfeeds_url($img['src']);

      // Skip emoticons
      if ( isset( $img['class'] ) && false !== strpos( $img['class'], 'wp-smiley' ) )
        continue;

      // If the image scraped from the content is found in $lookup that means
      // its part of a gallery so use that id. Otherwise grab the id from the
      // css class
      $id = false;
      if ( isset( $lookup[$img['src']] ) ) {
        $id = $lookup[$img['src']];
      } elseif ( isset( $img['class'] ) && preg_match( '/wp-image-(\d+)/', $img['class'], $match ) ) {
        $id = $match[1];
      }

      // It's an attachment, so we will get the URLs, title, and description
      // from functions
      if ($id)
        $img = array_merge($img, osfeeds_attachment_attributes($id, $img['src']));

      // Populate thumbnail on first iteration of image search if not already
      // filled from featured image
      //if (++$images == 1) {
      //  if (!empty($thumbnail))
      //    $img['thumbnail'] = $thumbnail[0];
      //  elseif (isset($img['thumbnail']))
      //    $media[]['thumbnail']['attr']['url'] = $img['thumbnail'];
      //  else
      //    $media[]['thumbnail']['attr']['url'] = $img['src'];
      //}

      // If first image of gallery/post is the same as featured image then it
      // is already added so don't add again
      if ($featured_src == $img['src'])
        continue;

      // From this point on just assemble the image being iterated over,
      // whether that be part of a gallery or not into <media:content> tags
      $item = assemble_item($img);
      $media[] = $item;
    }
  }

  $media = apply_filters('osfeeds_media', $media);

  osfeeds_print($media);
}

function osfeeds_attachment_attributes($id, $original_src)
{
  $attributes = array();
  $attachment =& get_post($id);

  $src = wp_get_attachment_image_src($id, 'full');
  if (!empty($src[0]))
    $attributes['src'] = $src[0];

  //$thumbnail = wp_get_attachment_image_src($id, 'thumbnail');
  //if (!empty($thumbnail[0]) && $thumbnail[0] != $original_src )
  //  $attributes['thumbnail'] = $thumbnail[0];

  // Says title but used to hold caption
  $title = $attachment->post_excerpt;
  if (!empty($title))
    $attributes['title'] = trim($title);

  $description = $attachment->post_content;
  if (!empty($description))
    $attributes['description'] = trim($description);
  return $attributes;
}

function assemble_featured($featured_src, $attributes)
{
  $featured_item = array();
  $featured_item['content']['attr']['url'] = $featured_src;
  $featured_item['content']['attr']['medium'] = 'image';
  if (!empty($attributes['title']))
  {
    $featured_item['content']['children']['title']['type'] = 'html';
    $featured_item['content']['children']['title']['children'][] = $attributes['title'];
  }
  if (!empty($attributes['description']))
  {
    $featured_item['content']['children']['description']['type'] = 'html';
    $featured_item['content']['children']['description']['children'][] = $attributes['description'];
  }
  //if (!empty($attributes['thumbnail']))
  //{
  //  $featured_item['content']['children']['thumbnail']['type'] = 'html';
  //  $featured_item['content']['children']['thumbnail']['attr']['url'] = $attributes['thumbnail'];
  //}
  return $featured_item;
}

function assemble_item($img)
{
  $item = array();
  $item['content']['attr']['url'] = $img['src'];
  $item['content']['attr']['medium'] = 'image';
  if ( !empty($img['title']) ) {
    $item['content']['children']['title']['attr']['type'] = 'html';
    $item['content']['children']['title']['children'][] = $img['title'];
  } elseif ( !empty($img['alt']) ) {
    $item['content']['children']['alt']['attr']['type'] = 'html';
    $item['content']['children']['alt']['children'][] = $img['alt'];
  }
  if ( !empty($img['description']) ) {
    $item['content']['children']['description']['attr']['type'] = 'html';
    $item['content']['children']['description']['children'][] = $img['description'];
  }
  //if ( !empty($img['thumbnail']) )
  //  $item['content']['children']['thumbnail']['attr']['url'] = $img['thumbnail'];
  return $item;
}

function osfeeds_url($url)
{
  if ( preg_match( '!^https?://!', $url ) )
    return $url;
  if ( $url{0} == '/' )
    return rtrim(site_url(), '/') . $url;
  return get_bloginfo('home') . $url;
}

function osfeeds_gallery_lookup($link, $id, $size, $permalink, $icon)
{
  global $osfeeds_gallery_lookup;
  preg_match( '/ src="(.*?)"/', $link, $matches );
  $osfeeds_gallery_lookup[$matches[1]] = $id;
  return $link;
}

function osfeeds_print($media)
{
  if ( !empty($media) )
    foreach( $media as $element )
      osfeeds_print_element($element);
  echo "\n";
}

function osfeeds_print_element($element, $indent = 2)
{
  echo "\n";
  foreach ( $element as $name => $data ) {
    echo str_repeat("\t", $indent) . "<media:$name";
    if ( !empty($data['attr']) ) {
      foreach ( $data['attr'] as $attr => $value )
        echo " $attr=\"" . esc_attr(ent2ncr($value)) . "\"";
    }
    if ( !empty($data['children']) ) {
      $nl = false;
      echo ">";
      foreach ( $data['children'] as $_name => $_data ) {
        if ( is_int($_name) ) {
          echo ent2ncr(esc_html($_data));
        } else {
          $nl = true;
          osfeeds_print_element( array( $_name => $_data ), $indent + 1 );
        }
      }
      if ( $nl )
        echo "\n" . str_repeat("\t", $indent);
      echo "</media:$name>";
    } else {
      echo " />";
    }
  }
}
?>
