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
define( 'DB_NAME', 'rgnutritionist.ge' );

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
define( 'AUTH_KEY',         'G>75:nLVEIpmOaRT?e:E3U^-VCzx,{|tU^GY`zsZN*@F5HWwB3)<Oc-,p7>9flPO' );
define( 'SECURE_AUTH_KEY',  'X)qEwkiaV13dl@l;LeeW^[U3u*h=va/1qk$KkH`D]0Bm1JR0uLZNwbw5GVj6 Oes' );
define( 'LOGGED_IN_KEY',    'hQ,/@)RL(4;8O4d>cztZ~Ub=q4yBB@jwNX%,`#+SMEFx&FJ`xlhSga8h~Q>l}pY$' );
define( 'NONCE_KEY',        'E |x0DS(SH)X,yvs>7L,Od)DVa.(85LYO~Ej~nw)oo2rEr4?0H9nLP%p.LVTd:c ' );
define( 'AUTH_SALT',        'X#tLAImQYT<ILWd~h@LVJM&i<gYJcO2?U862>.dG7RI.U*tY&SsNl~()(pviQfj=' );
define( 'SECURE_AUTH_SALT', 'D[~)HBd)O?{)/ZORceJ{n!;ymG$u[Q!^NCO8beylGunsj KA8X(2TdVmeXD4]9F)' );
define( 'LOGGED_IN_SALT',   '[^:[=y/?XOLJ@6QknVA=U:ckr,y2=xmpq!wd`0C?lc C`%b&3ZzsM:b&!JM#)8Ff' );
define( 'NONCE_SALT',       'G+Mau4@9QV9@2G~4v`L>b(Xs#_0qo|3/:^)4k[l%w#=IzEfwRy}!u-4.>g!#s6Ml' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rgn_';

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
