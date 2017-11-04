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
define('DB_NAME', 'bitcoin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':kVBAFA2@}VVd~A<J:/V:8mR`&WK~2,|@*MPM)e^Z#Jl|ne-=kDaN,L3|iLQRi_ ');
define('SECURE_AUTH_KEY',  'r([%JLx|Rqi?e/E&~.[eWxq/^Z?FOlil<84)JX+A4tz.nzHIjm[IisVjqAs NIxA');
define('LOGGED_IN_KEY',    'thj43p`y<a<mgVzA`tA]#B?G~>Ox?l?x#k8-w)Y[~@`ZlIKF7x~(#[x$e>-||Ac#');
define('NONCE_KEY',        '|ylaX*^?T^C*U{9JrF &q#6iHa2Y 9 H$tJVf ]D 09$5$A2)+N4(sYlJsjz<HPu');
define('AUTH_SALT',        '?g)jzIo7pvDO`:5t5eL@uW.4fs5}gnhVN:=y4G^Y_IbE,.Ui?qfon @ZK)F;nw`0');
define('SECURE_AUTH_SALT', 'zcJKZ|&+n?/KRia,,UdZPxT3]!N}9Fh)DD G<9d5Uj*wu;hW|j}bs XO5DKxx OI');
define('LOGGED_IN_SALT',   '8Zd F*$08juiQ<Z>`s`e%<$Z8q;%UO}8=x}u;qHEFcx2_x)BrA/Ur*c!t!#Wr0HE');
define('NONCE_SALT',       'HDI.82,5,-KiJ8E7TS4:j~~[D7+ts:~$TKW9G_zy[Val+a+10Q=v]rehk[e2Qp}O');

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
