<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{BB@R{D!=HT+lIjRf4O5g%EEpST@@DO;9;A%WAVY!16P@3H-!`Xy*}Q,B0c~>h1k' );
define( 'SECURE_AUTH_KEY',  '>OX+3^op<4L=%iJdy~K|c2?kLV3u:@]v.RcpD,Ln>:L0/Vg/|tKoERpj0.>M5U/q' );
define( 'LOGGED_IN_KEY',    ']EN33)AGoCM}.joIrz*<M<!.7HVL}HoMR3j#8C.{63{&WO@9B9~;ZC4J4*i[F4Y@' );
define( 'NONCE_KEY',        '*X]q9nr(L-_pshBlBf2&:4pv,z(-oMhTvBHV1ZQ3pWu2H$$HtQjyXcALeI}x@mpm' );
define( 'AUTH_SALT',        'vVunaFl6T`l1T*#3=pfaIjX&bArS::^jCd~=.}:HvBb~<O8Y`lz668zUM$Jn1*P]' );
define( 'SECURE_AUTH_SALT', 'jfXj!tAQC)p,oBPv:T9[#BTuC/?a;f@{O]G),^VZ>#b~r J?/s;ZwxoeN1gemm3:' );
define( 'LOGGED_IN_SALT',   '`a6M {d4abF{kDf%}[OEb9J;;c+G}D,%$IqXZng.^ozM]].q9/HT}[ZB{ztH$]Q>' );
define( 'NONCE_SALT',       'S37x<ISzoa => vYs{=6jISd)C_ijHvH*Flx?7<R,&BGUH8,eqdN[<a?]?*luw<B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
