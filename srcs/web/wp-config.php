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
 * * Localized language
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
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'n`gqUhY@t.2bkp)[~`hvU-PZNpsA$,N5!f=_HnO;3Vk(5E^^LL#ngfx=wpy4}s7K' );
define( 'SECURE_AUTH_KEY',   'ds)1,R!(zg$+svYMRO@~h]kXM;V z_L`p<wQlZuso[7]R1@zq74IU MFnW0pIL]l' );
define( 'LOGGED_IN_KEY',     '!]lFwB_dohoiy{Ad9SR3<m5nx<eijvddXF.X;m6s 4;`|8U]z#sS3{R3@nE.^f7F' );
define( 'NONCE_KEY',         'CxskxnVBQB}$0cWMT>AKX[a^H5c`rW][TReILd0w:rp2]hPxC?=YKWSb]li)$~dv' );
define( 'AUTH_SALT',         'Ai|StC>c?mRSn{vnu&|d:.WphKX@<kC5}F_i0QUpQ;Cakl:?,C~:4P%38u;qu9&M' );
define( 'SECURE_AUTH_SALT',  'U6owgw<)f;xhh>> 47>JQEb!JB9Hni:]3rrK![*QcUu6zH&s57<J]i;hWn!L^,up' );
define( 'LOGGED_IN_SALT',    '2@MWKVQ{WyU[26RtzW!XBoimhi,1M,~<0y`2ub7JI<KT/;j E9/Aaxh`fbVLy.D]' );
define( 'NONCE_SALT',        'hUet,r!#SZevOxE{Q3=t/`=E=I%7Pa9S{SS60nojd$ew: R)Ym0.-3%!8D8By``,' );
define( 'WP_CACHE_KEY_SALT', 'RgPH90r8a8$ c=TWE.u>v~QcjdA[N&dfA *5oQ{ Qf6`+LX-Ou$wiHsNk5_ujymG' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
