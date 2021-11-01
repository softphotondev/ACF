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
define( 'DB_NAME', 'acf' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '|?,O^^d]%Sc2DJx-.!@Jr,)1KoD@eRC^#%$$TOOrp[CiGWp5UxicnBs2bD_BY#Zp' );
define( 'SECURE_AUTH_KEY',  '~db>mjXXeFVc-S28VVvX}w)E+gS-rfYDtvPx&z-Hykj9 L9aOBQO9(s$6RH?)%1/' );
define( 'LOGGED_IN_KEY',    'bH$Q0pCO&JVVxYK/CfHpFYD}4B.|SRCn8$ cD^loybXz=&9K;U{KVM];Lt%{(C@F' );
define( 'NONCE_KEY',        'a[@dJU??cHVhUSE3yue;qbVPwRG[=o&<;Uv3y+7t#a6(<RXJw73RW68HJ!MpfE=s' );
define( 'AUTH_SALT',        '|j$G{E<NXtT {b`N%`X0Jhhd2U3<!g9i_mS5|-Zzx5c?Hk`+%L&{W?MyZ.w]t#i_' );
define( 'SECURE_AUTH_SALT', '6aI{C`,^ji19l/6B0,xiV7pT/IaQb,4w(FG{)Tl(xWlNv}F$BetNP:g?;~n9cp7(' );
define( 'LOGGED_IN_SALT',   'movH}AK10m{{5D3.A:O@]4x-Or$-p2^/tpa$,yhJ+cik(`65^ [M49zcxnC_hH|S' );
define( 'NONCE_SALT',       '/b,lfR7xL_$lV qQm1tO>Io4^C=<y<rM;xr7p3a[}=<cKEWXXK6h`$zL7gN-jz0?' );

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
