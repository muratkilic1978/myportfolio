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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/* This is only for MAC user */
/* This allow you to download plugins and themes on XAMPP on a MAC */
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mitportfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wu1VN-K _L-NIwD+6`a|QlKUKu]Z+m<bVR1@K94}e$fjRH;mU?BUo T/Ql8g1I3T');
define('SECURE_AUTH_KEY',  'Q)9,wi)4]Pk8A@gPXZB,1JV)>4!tD6@3vKLK!a!m&WsoCphzJg4mHF>v_w);,Y]J');
define('LOGGED_IN_KEY',    '+He;FD21ApHa5*X$OaZN-XTz<2CZ^8f,.|?GgH-5aRF$d|Z#3nsg0wSl%KQMcjh#');
define('NONCE_KEY',        'rktW81l9D-zR4>%MmhH@1y0F=!I 8c^eATVM|@$8fd%_Lqd_ teS58k2W,kr8X!v');
define('AUTH_SALT',        'fZfmTiYI.c|45[68mAdip~k)c5T]PeLT>c;X{.llu)>S]C(vm}2/R5|M#uD8s6>l');
define('SECURE_AUTH_SALT', '>]y@$VG$wF2^]-V]&3XWSZHS5skwck[Mgh+*9`VfwsH=,IR}Fgv:Yu9Z((hZH%1*');
define('LOGGED_IN_SALT',   'taxfUQ+vcu|}0+FfIMB6=/?VifVBvar`xUR$,<{1Zr;B9r&$H?MtPr%>#n|?;HX-');
define('NONCE_SALT',       'nbgsIy:~!Qer4>RqkS~/RP7sV]YG>_4Kum%+ZRz5YQ5x5+|=.u|LX@kaM4H:O%v#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mitportfoliowp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
