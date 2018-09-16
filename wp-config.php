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
define('DB_NAME', 'poshnew');

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
define('AUTH_KEY',         ')&g~XWmnjJqt5#Ds> (mdc[d}oTqEA5kHe<,`QPT7bTnQhKA!pt@{VomS^BrJKcP');
define('SECURE_AUTH_KEY',  '.C_81+X!T96$L$it6~]PVR)}fz_jh_c~!=&6n|<Nb.S=e9HHeg$D_x=}{Br`S#]R');
define('LOGGED_IN_KEY',    'W=SZK?)QPZ?J937~5;Bd<j3$*3YY=lv[(.Z*K9P*-t8gFjU78K/ u24ByqTSmf!2');
define('NONCE_KEY',        'K+%gXr@kK~W841*Dx*!9uCg`7{E+=ohHhg7&?1>x.{2*S%3WLW;}s6US),kYzW%s');
define('AUTH_SALT',        'k<l2F%6x{aYidizVY4c>:sJp}E<N D:- <Bq<1F7NSn!X`5gDmNd}1Lh`?9w+kO;');
define('SECURE_AUTH_SALT', 'PK$`jz2A+ZOcIQ9M&w~dQdy*Rwe+6y;cSE~K]6aS%HF:OXl|l/SmQudmmA!yJSYC');
define('LOGGED_IN_SALT',   '~>G*T7$<j O]h<HAB|akJ50x/jF{tCxHhvxb}lE!E0Y<0<wQ8S(lNSu`,w[f48r1');
define('NONCE_SALT',       'GH_lR.54^$W)R!V* GCgR<3_..kxIcHOM=B|{ugP,/vND==&$[?;3.6VsuL`]$iw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
