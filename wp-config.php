
<?php
/**
 *wp-config.php
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'poweredbyeq');

/** MySQL database username */
define('DB_USER', 'bb16625ec9cddd');

/** MySQL database password */
define('DB_PASSWORD', '6dde6ecf');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-azure-northcentral-b.cloudapp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'sR.GcWmOhR0GE>h*Rl7#`j3*)mqyO7DN2YJ:oe4I4.uP3}WnJ/D/n|iLJ>o+*|1]');
define('SECURE_AUTH_KEY',  '}_vD@Kw|8xP#fQEyq*Zabz>i7laZ9jeA;#b~lhKtF?BD8OdIW$=&^p].,U;P7)^9');
define('LOGGED_IN_KEY',    ':)/2-i.$~nF`Wo`|ImTCW[G6@~zL1{R _Fd@slUtlU+83zZsQuxF^G@w(5EVj`%Z');
define('NONCE_KEY',        ']2$KjiI!-{1|IiOPl#.*/J<{NeA]a2NK0AAJp_oJEqCv4chjGYv8f)$+P8ksR 5T');
define('AUTH_SALT',        '#szNZE:Waxw:4:=p_n4Z D6k _75/H9OPD.kx0.0vFjQj(1Gv1#(7 `:<Y;ltb}s');
define('SECURE_AUTH_SALT', '}J]ccyN>]Y;.v}TrRnl-IXtz^HB5,VR,y2QSxSpR-{8j-J>~ioM?WPCkG>]RG2[+');
define('LOGGED_IN_SALT',   ';:E,t`Ge>3 I>@%MM$Y2+v5H|(=#g~#2AFFB+@$B4S8Zz<AN;(|68R}m<=5UbO8l');
define('NONCE_SALT',       '&s5Ycr!7i.;8HF4K=S`e@Js>^(~nHmc#c_,*LO]/Az $C_9zS>pBtz!>ORr)ri:3');
define('WP_MEMORY_LIMIT', '90M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eq_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
