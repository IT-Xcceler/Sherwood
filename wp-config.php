<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ipcghrhj_shdbdec92021' );

/** MySQL database username */
define( 'DB_USER', 'ipcghrhj_sherwood24' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fAYhK#-wWOSf' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'gF*&Z^IG]a>]Cm&$1ndJeVYg}@+44SC+WD6Iy0Lnm5gs-vD|]FRhh)lHSz?m?v:_' );
define( 'SECURE_AUTH_KEY',  'H1SG!KxM9BozzHHp s?d[F$c5rl=Lae^k=l- i-6eZe0/~[MWCoQ$fjs2rlHsz~6' );
define( 'LOGGED_IN_KEY',    'l|X54^~qlI#MVp} ?&&%T*|Nb^acL!B6:!;d4>b2s>W57>D$~13$%ED;Q1_5{w!P' );
define( 'NONCE_KEY',        'J0mUmDz4XtqG=pb^|uYc+e`w[cP!L`W35jTggu{D0P)=!;m9]K$s:/jS[Ni/J8.U' );
define( 'AUTH_SALT',        'S!NVk$=6#Bt[1HT~tr5C*B.h|WXCeFPsW$,t/)7YPEC;?>CQnNsOv,7rK+MzBW_J' );
define( 'SECURE_AUTH_SALT', 'UT30Sr^ph7)?xo[f3pgS /b11UmyK7x=bF%tm MD4YXi5*C(4KI:g)#4D_QfGm_.' );
define( 'LOGGED_IN_SALT',   '`yYA+4fKeIX8L) ^]otlMzlP @J8ak0?7B-Ty6Z23`n-c@U8_2WIG=575U^cpPJO' );
define( 'NONCE_SALT',       'rI-7`m9/6D@j;:ZKbj(m[!S_(E2kn`%C-~[M 5dfE3#b2&EUrc=+pRU7IKB?ri-B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpl0_';

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

/** Absolute path to the WordPress directory. 
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}*/
/** Absolute path to the WordPress directory.by Yash */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

define('CONCATENATE_SCRIPTS', false);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


