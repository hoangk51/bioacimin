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
define('DB_NAME', 'wordpress1');

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
define('AUTH_KEY',         'It+Nt4+R4YBG1BeG956AfoloVW:@KmpK?OlZ +NM]3Jh}wqKk$N!_tc e-X!*JU]');
define('SECURE_AUTH_KEY',  'kGkXs/lk[?IwdD+u,cuW)dDM-f|40MszQx|kXKo(DoZZk-e>Xdj71[:^79B)vi6?');
define('LOGGED_IN_KEY',    'Y%5a3#ysjI{*MzovNcD|:P*J5yPV$NAZ|Ga0$W3eCD;[uDIp+to5!tILuh#S4bpm');
define('NONCE_KEY',        'BhL[:;MbvW0)vtc++95RrC||+ENa;1#8}I(G0xX[xW<o,MA15;:-!Y9VFQny(iy;');
define('AUTH_SALT',        'AU-1jK(dS^xl:4_#zI|ik}>WVM,-9cZ0~R3 nh4k6ErXA[KbP%d<Xi/8~jJKbD)%');
define('SECURE_AUTH_SALT', '{H8(?@;[cu)f0xY#wN>XnEN3mK242.K/I6uj=&}f^oqHgspcC?s|]+tV>ZT!.+ML');
define('LOGGED_IN_SALT',   '-GHWE]}g%oXl>S_)P~Kv#A!v+`g}qKV2Qbx7w*|>g)pWDH|Q343+xHJ.wN?op_m ');
define('NONCE_SALT',       'CZ|))RX*>5uY3k;{twiXnf*x#R6oZ$C%o7AskE;:k>6A{&+~IsPyJ.e(*u?oW[l7');

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
