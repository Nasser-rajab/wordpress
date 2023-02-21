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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nasser' );

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
define( 'AUTH_KEY',         '@P(UCi7YaQU[TB:csvRul^uMw>M%4WD?I![$O=&JoSy~6vmK|}^2Vkc12C=[uGWa' );
define( 'SECURE_AUTH_KEY',  'ow}OzJc@oU@=qDb&//g3[wnSB3dMe1gMKa1*N.0YF[(m}jwPz 3O^.yT[l_P$<1D' );
define( 'LOGGED_IN_KEY',    'Y3VHdC{}YW^WKWU&>#%2;XvcrtV%4Bg?CciG7Zr&i*1}>ng6+MiQD8Eotf9:7v%I' );
define( 'NONCE_KEY',        ')|Q/Kd%ooc19@gD2[;g*c[!#67M%U<$GU0|`6(.eI4QB?[Mmk<orwRC6u ug)nvg' );
define( 'AUTH_SALT',        '^AKcDq@(#c47Ya*2._@{e9mogmaW>BTPd^z^[*q9b(NpKC}6{GtH[%>?T8cqcEeu' );
define( 'SECURE_AUTH_SALT', 'cD@CBFt-*jN;>k3N=Az]?/A?`V)397R;[NmE]Z?4oQ&A*!6a-@W&2=~@^p,rm+~k' );
define( 'LOGGED_IN_SALT',   'Tb9Uo!33@q0,ODZZ`GAntY1*cP&puLN2j1[01u_U})?)WYb.~vGbFOYZdFJoB;ia' );
define( 'NONCE_SALT',       '2gv%_[xB?~N8.cgP3yCwYs4q*P7cMI3j+|QT0L$z]`^H!BlIh)/(/j4tH_mIlQqM' );
define( 'FS_METHOD', 'direct' );

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
