<?php

include_once('user.php');

// Inialize session
session_start();


// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username']) || empty($_SESSION['username']) == true){
  header("Location: index.php");
}

//checks some loging page , bag'o lang gi add
if (!isset($_SESSION['user'])) header("login.php");


// Delete certain session
//unset($_SESSION['username']);
// Delete all session variables
// session_destroy();

// Jump to login page
//header('Location: index.php');

?>



<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="Bootstrap,%20from%20Twitter_files/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
    <link href="Bootstrap,%20from%20Twitter_files/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.io/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="http://twitter.github.io/bootstrap/assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container_cs container">
          <div class="social_cs">
            <a href="" ><img class="fb" src="images/fb.png"/></a>
            <a href=""> <img class="twitter" src="images/twitter.png"/></a>
          </div>
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--a class="brand" href="#">Project name</a-->
          <div class="nav-collapse collapse">
            <div class="menu_cs">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolios<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Print Graphics</a></li>
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">Vector</a></li>
                  <li><a href="#">Animation</a></li>
                  <!--li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li-->
                </ul>
              </li>
              <li><a href="#contact">Blogs</a></li>
              <li><a href="#contact">Contact Me</a></li>
              <div class="logout">
            <a href="logout.php"></a>
          </div>
              	

            </ul>
          </div>
            <!--form class="navbar-form pull-right">
              <input class="span2" placeholder="Email" type="text">
              <input class="span2" placeholder="Password" type="password">
              <button type="submit" class="btn">Sign in</button>
            </form-->
          </div><!--/.nav-collapse -->
        </div> 
      </div>
    </div>

    <div id="bodycontentcs">

      <div class="hero-unit">
        <!--h1>Hello, world!</h1-->  
        <div class="logo_cs"><img src="images/logo-text.png"/></div>
        <!--p>This is a paragraph for header</p-->
        <!--p><a href="#" class="btn btn-primary btn-large">Learn more »</a></p-->
      
               <!--The 3 circle buttons in header -->
      <div id="headerlinks_cs">
          <div id="blogs_cs"> 
              <a href="" /> </a>
          </div>
          <div id="works_cs">
              <a href="" /> </a>
          </div>
          <div id="emailme_cs">
              <a href="" /> </a>
          </div>
          <div style="clear:both"></div>
      </div>

      </div>
           
    <div class="container container_cs">

      <!-- Main hero unit for a primary marketing message or call to action -->
      

      <!-- Example row of columns -->
      <div class="row colcenter">
        <div class="span4 col1">
          <h2>About me</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce 
dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
fermentum massa justo sit amet risus. Etiam porta sem malesuada magna 
mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details »</a></p>
        </div>
        <div class="span4 col2">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce 
dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
fermentum massa justo sit amet risus. Etiam porta sem malesuada magna 
mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details »</a></p>
       </div>
        <div class="span4 col3">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis 
in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. 
Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
 ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details »</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>© Company 2013</p>
      </footer>

    </div> <!-- /container -->

  </div> <!-- /of the bodycontent -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Bootstrap,%20from%20Twitter_files/jquery.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-transition.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-alert.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-modal.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-dropdown.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-scrollspy.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-tab.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-tooltip.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-popover.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-button.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-collapse.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-carousel.js"></script>
    <script src="Bootstrap,%20from%20Twitter_files/bootstrap-typeahead.js"></script>

  

</body></html>