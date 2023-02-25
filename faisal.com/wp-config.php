<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'faisal' );

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
define( 'AUTH_KEY',         'n-zw.y HC)eLlLw^`,cqIFRy;p#nzj~1(f!!P4$&:Gms.q1NYKN)&0qZl@|dgmX]' );
define( 'SECURE_AUTH_KEY',  'X2r]=gZ[*IgDWMi$M;97ts$~9tkEBzJDy YdaO1bPW7vuA*Xcn]39 @Fkn,6kEB.' );
define( 'LOGGED_IN_KEY',    'X;ct:7#,8@oD|iNf%Xj{S>P_);N+0=*b:bzgdggpb/@biSqU6L:%w*K|7dE#q1 !' );
define( 'NONCE_KEY',        'ag*K9sBnu@KhN|0}GJY95s]E;E|$?K#TN*wo}1dH**Ornhf+]$N6o$^FU_3mo_pN' );
define( 'AUTH_SALT',        '=;q/;xZ5^ZnV5lS;gsq):ae+5Bi=tu0;L0d}-X$@vC~yUP#7TFHtagdjm8Qu5EZP' );
define( 'SECURE_AUTH_SALT', '=D@a&&bD+z!T>@7YftJ:`!vAG4iZEH8nn^?(gxDQabS|xW^IB$||?8Eo2Ia<!Miw' );
define( 'LOGGED_IN_SALT',   'ah4~A(SN,oou}r{48X8=}KI>iHK%PG3EG8t*$BO;6;^h98d;@ySiS3RS$&$65OLp' );
define( 'NONCE_SALT',       '3d>xCJ/df&Ywb(px?.E|hAMF}z<O?DHV2`p7{T|<(epV,O`0M?{7*#2O=y=<;M^2' );

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
