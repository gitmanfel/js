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
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1xlCaIme8F&dn^5l$eSo}-le1x{f#&0SyF+00B/-I2o2+3s6}GZLkOrMpKBs]x+e');
define('SECURE_AUTH_KEY',  'dMTB0Vfg|huEgke8rUBU(cG#|usfbD,qS#9=)F,sZjF`6x&5^*cgHb: g%XWOwct');
define('LOGGED_IN_KEY',    'G?Vrcv7/v^ vOa;faxMW*K+QXp$(kw+[kB7)vS#x<Viv U$eZQRzMZM (;}q0IbE');
define('NONCE_KEY',        'ol{yRU9brlhQ#]7^$~(]NoWQE#5J 0Fh._IDx5%|&%LX-YbFJ%Kx46+8x*A<nx(;');
define('AUTH_SALT',        'jf(C6Oh|k:coqL3n>Z$O@U9e0~|Wv5kgn,/J+h2>1-hxhUbjl7CGGm.Z)YJ.D%)#');
define('SECURE_AUTH_SALT', '4 D1&Kvs+>v!t25|F*p9zY&(tzM/touf|eQ,L]Sg ,,y}cbwp]O]ViC%pEnWoj~{');
define('LOGGED_IN_SALT',   '7h87F(;KnkFaG6;z2LcNouTy$2O62lS4^T25hcz:S 3WCHYYX9qtYq@^^$}?,n#H');
define('NONCE_SALT',       'RKed^z{=>-f&M$ch5D7c-ot3f1LhrZ?^svJ*d/9?r=Ug>y(b3iiWvFK1HD^@4eh_');

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
