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
define('AUTH_KEY',         'YYjX@ta-Koh!v*hXd`YU8?iZDQ$vQrlL7 ]XUwOj8[~!W~H%ceP?`@-O?CAJ8rnk');
define('SECURE_AUTH_KEY',  'd}kuD#(zE`bSHSc<gp;nOo,)O8inJ&.UPMV_8*{<gn<tB5SvR,YbOKD5ywi,Vi 0');
define('LOGGED_IN_KEY',    'j5f*J+Qu1UV,Ji@2jBkE7>)b6iq-?k(I<}-7/Nh:AR 5fnS$_bOLPBGW!Rteya7R');
define('NONCE_KEY',        'tD/V^%G),I2XnM@?qHhqVi(GY p))E37sy(6U!GkVz~)K34N` ODnA1t2{y1<,$8');
define('AUTH_SALT',        'rSdS?%L]|7Cf><X]_sbn]A-vt1w!vpl]N,kza?-@TFX|Ij;,=J!Om*xW]!S`K:;/');
define('SECURE_AUTH_SALT', '5=0u7zEZhd(nG1;!vxw;:JVH6E[04O{:6A=H<j QjFp|b?14h;mD f_.6|ns+$hj');
define('LOGGED_IN_SALT',   '9}xccE;D8k@f/_q^cVdAkQpmWOz8^l&R6t&wkWFq|JTx| r_c.[<kM)!W;ak$s r');
define('NONCE_SALT',       'x`<_-JOqxtAN7;*v6HP~%V0XGlz19qb~#07CY:10cZ1l(wXUl:L*-E5FOOTu;eDb');

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
