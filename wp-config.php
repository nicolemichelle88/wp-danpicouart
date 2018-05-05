<?php
/**
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'P=+cz:o8Pb992dH7ul{u:0-37e}E)O*.F<|$@)tm00}Erc,fe$:d?uaeLr{tsk u');
define('SECURE_AUTH_KEY',  '#/{=l^AXr3TdDF<M@ca`(,L~UeyPp]95[?6bS1,tBAT^bQ9D7@b:/j,I`]q6m8g;');
define('LOGGED_IN_KEY',    'knv ~#5>f{p@xtQS)ZtLy5p[rH0<e}cB=>/=Qlx(F3qpy%mn/[grPL5mJ%q4dXdt');
define('NONCE_KEY',        'XY@SD(+g<w3vv>#Y8PA7v&D;}NS?l$(f>x}ehl|wy6}fyYYYNJ$zN00e?9?VK1Ph');
define('AUTH_SALT',        '5<:f6Uj,dNzr[p#T Sdy*{ZY:mrhK=$3Qx#NZG;Zf7fkKB|eI%2*k2Z,N8G8FQa!');
define('SECURE_AUTH_SALT', '45Kh|+C=in0JKy#kMNt4zO&uy1eBB5<w0%7rrN?c/|Y4FpPaQH`($Z75-3`X-^*N');
define('LOGGED_IN_SALT',   'UPBc,J#Z;.,c]O&>M*e8tVEbp_/p?Fo?5<0,!hg7XMTSZ EDdW%C#m9F#eNc09sQ');
define('NONCE_SALT',       '~&j<WPGk(;P!RKZr^8sKR(T)x% GrY(5@ )@!n+za-4~n7h$2[}3u$ 3H>ZDnR#E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
