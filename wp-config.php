<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lawyer' );

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
define( 'AUTH_KEY',         '|VWty2WMW_LI;_<2vr:cIncqjuBd4.c9daWqo{@D~uv}BX7:@)^wBUz:dVB8Ajh9' );
define( 'SECURE_AUTH_KEY',  '!4 dKpOQ>,{~!#;;H|_$} #(ZS6pNz6 lM1`VWWysG:%BAO1xTNvLT17/>[n:<j:' );
define( 'LOGGED_IN_KEY',    'O?_aTs4!d]Qm-xKSHEEEIT#U7lq5~aUQD;T2WZqHhGp}VVL>04#VF%K)qKy+*RLa' );
define( 'NONCE_KEY',        'y40bb( VPrnBbtjy+ q-i4npW 6!md+@)!|od{tk4.NZmSca@%~OJ.~!=kC4gsGJ' );
define( 'AUTH_SALT',        'HYX=~YXe/s*BdQ<wQg{*v,>*B,}VIoU|yCI?JLrv26@+yJQ_i&VxfGzSLwN{W)Sn' );
define( 'SECURE_AUTH_SALT', 'UM|qdX5+L]:}nNPSZkBZ1VoFT}dTM7.k>k%Wu?jt(0:Y%$SZ?$xV8K5~9SVU|!TU' );
define( 'LOGGED_IN_SALT',   '_DiuZx[<Fuc$+hE%t-8>m4S9~b$kpTc?gkBnrvy~.(UpIg[XE*^HhA=#WD&A7|6g' );
define( 'NONCE_SALT',       '|@2ntTxxJv~/^020K`n=2>Rbyfy8ntsz 93[|G5K5Xs:^K0K?GgyxR&9Y)wni`W{' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
