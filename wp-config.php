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
define('DB_NAME', 'ffa');

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
define('AUTH_KEY',         ')m+@MJzC|[Zo#*tu6Nt fi,]>E8I*_.Y%^D&?]O6tLo8DLcye6{*Hd`~ACod;UU4');
define('SECURE_AUTH_KEY',  'A K,0n,O`Tp^t^5P<l;IHWELL 6?rkS}{RY*j4}T,!Fvb:guX2R=[.|Hy:?E}kh;');
define('LOGGED_IN_KEY',    '*}!KE- )Qd!V/Zsmt}sx6KdP!<|[f80P(YCl5$f?-_)j. oykDJb*3)3e2L7!)6Q');
define('NONCE_KEY',        '7aq1>}&1EH>w/{z)nj@1J&K<-2>@bi>!z;t#aKes^^*j@,k>,uEmC0ng>vz884V#');
define('AUTH_SALT',        'pg(FPWp@N>rB]uyuFg~{w7NpnR6-<$[7Mnvk]X!j[?2qT__9{HV_Dz^%4aZQP.ys');
define('SECURE_AUTH_SALT', 'b:/07LQN=Mqjvnn<qg]YQ8<;qq%wKAW.yU!B7V[&jo32xbRQGsAjalHLq*8w;8Ql');
define('LOGGED_IN_SALT',   'YDJKd*vl/#<7!Zz})h*gYDXAo*DUoB@+l0[xK&.}v^`Vmh!5N-s-gLJE~aHP4d+,');
define('NONCE_SALT',       'tR^?jzN hOOKxZ9QAZvaZ@(pgW[|?&,R{#BpdE[*O(rkRt8:3OY$h@~kib&}FIL<');

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
