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
define( 'DB_NAME', 'client' );

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
define( 'AUTH_KEY',         'cpLYV7~/&p2+2Gk;|F6~q<[$#43-^:`Ho$bb=/V8)HY``<TX<u$&^PIAgAu90&V}' );
define( 'SECURE_AUTH_KEY',  'cOM]i`IsZ3)`X4$+G-Z(W)nHEdI^J=YK%sP8vZlSpY:V&HCtOAQ2{#Iyr FVMgV*' );
define( 'LOGGED_IN_KEY',    'H|iS]}3xhGmb]m$1G7j+*l&PJ]~xIp80HPG/9nd0HnU0w@lF?)}Yz{rV-5JJuUVP' );
define( 'NONCE_KEY',        ' =w_.r]9CDVn18lh45L8xb m]j@pfmZ%98sa;JC@W39@OyE3V|Vk-:=y&4IB4~Pr' );
define( 'AUTH_SALT',        'i,&7sy6gGqt22|u-0QGv|!$Srz(HaKPpobiK@l1&DQncO)T<W&F.ug?S]niN!=$l' );
define( 'SECURE_AUTH_SALT', '<E1Zw$?O6M_uB9we;8rLvo2d,ol8yAqu%^?E7{P>U_l]~HS|7e!|yNo*d6qVm<YZ' );
define( 'LOGGED_IN_SALT',   'K#F>avTxcC?}`OsvDJ^Xsv-%KFN=/*V`j6DWA=QyYi]&GLhU-fTpS#!T?sNDCk7l' );
define( 'NONCE_SALT',       '+Of18AAm^B{!8[L[Q3X<Vc>20<_%E?B[c~>L%Z/qdAAw 8,nWR6YE<)W:I_2_GFS' );

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
