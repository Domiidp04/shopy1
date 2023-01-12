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
define( 'DB_NAME', 'wordpress-prueba' );

/** Database username */
define( 'DB_USER', 'domi' );

/** Database password */
define( 'DB_PASSWORD', 'domi' );

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
define( 'AUTH_KEY',         'z#K`2MvP!0zr;*4l!^=a&4Wo?,{%7vs,D_hy&ht(7>$;>yTtY?veBc1FYSaWP(at' );
define( 'SECURE_AUTH_KEY',  'Fqd2Qm1gfmo]85wGAL?p]+1*Yt0P 6}s#`I}:K#:M$N^-i&vfwx_>3WfjFBs!91q' );
define( 'LOGGED_IN_KEY',    'J2&)#IXJo?S+H qg[+sm1ODe)G+u|ziILpe=`F$P]<J$@ahbJ8BYeqb^AfX^`D*U' );
define( 'NONCE_KEY',        'M|~{4X`^l;vR4<P[s(VY{@J@odi|&=Qb!.xR5zJg5&P55k6uCGv.S)){1bl,9w4B' );
define( 'AUTH_SALT',        'Epl?-c+jl?BO,2`.|S{4f@>?pYA2%B26Y,[M@0XSn<Zw4@TN1[&o=z,6SRh}C8gM' );
define( 'SECURE_AUTH_SALT', 'bGQR6aJ%uZ#epwttR,-CH3U(UCi>{j>p!N7ru85NqQNsqE8vDS.v4.m)eYzq;j=$' );
define( 'LOGGED_IN_SALT',   'ojCKOTkbRj~>6KCAv*)y>lAEfpl>)X>`K LuM2XH$aQg0&d]]I.ke3naKA)r8UQc' );
define( 'NONCE_SALT',       'y$kl0pff_GTo Z`3zuXz60J30@8pFfZC|dYbQiR.]m;M>Ub!7F4w=u;7Mht-/Zcv' );

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
