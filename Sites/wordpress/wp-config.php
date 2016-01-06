<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Cx(?+?4{f&(n)xweO5fR=c.X?k-~htB=/wx `>_4k|,$6{A ~;4+<fcFaw1Vr_nJ');
define('SECURE_AUTH_KEY',  'p8/a -!dMsPdAqROIE!iZ-bu._2_4e4~BI;BD##?OCmsoMX0N(Pi}kh7r)a<(n4p');
define('LOGGED_IN_KEY',    '2`Fgf5`wj4KMkVd]D#HJ3XG/unjl+.!i9d[JST2Dqdu!?|o^<eY4VOKdqVOYA.&k');
define('NONCE_KEY',        'MCwOORGW^n8a$+sggmR3>g?j?|2L}=aUFHr]kgs[l!mL69*1nV%C%KYb|&OcEmmK');
define('AUTH_SALT',        'zzk_T%Q*:F`;#c2u9j|m&.ic8lZC`89JHRi!-#fp0cMLlwtVKnF<S:CiGc!+G7L{');
define('SECURE_AUTH_SALT', 'UJr6f43}CK0w)dy*&+:%_P`cT&88],NhAs[/!jP>;upyCNgJofTt:)QjN(VI*.|y');
define('LOGGED_IN_SALT',   'h6-b)S2qQ$YA+9UpWRfP9T@M.:ibs5vch&-32]#dH~0#`I.S[|QG_L[&Up|sy|kP');
define('NONCE_SALT',       '&f/LNwtKcUx|F:UgZ56>AEjH9b[#,+xW6|Tdc?(5O>w,+?~!x3s|-Ipo{?Nm`M-D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
