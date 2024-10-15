<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '6:9!f?3 fjgp~B>ni/0xG^, /S</7Q(E-L*&{qU`kzZIN3;+@UudN[2buXy(6RGr' );
define( 'SECURE_AUTH_KEY',  '[!jm>}_zw%3jFSweLA93%,n`<Md_ah;toM}+Ct:n%_r~,~?,>%A(;BSnl,XXWj}=' );
define( 'LOGGED_IN_KEY',    'Gu$&,3o6n*3w4$m0k3vZDxQ5v7*u8|I*`;o{@|:`}Xg:P *Qo04&ssTcs->y|CgA' );
define( 'NONCE_KEY',        '-Y{z_6V<wv<{e4Su/VfxSq9oYL!y7->O}cZs}CuUu|u;$fJ<KOPd(`Q&:sn^6167' );
define( 'AUTH_SALT',        'c(5(>r23}HuCmrk17EY?[SOoPOy=i?r)Txj7n8KnX^;=}`fB{+qcS![,WTfqG07~' );
define( 'SECURE_AUTH_SALT', '4/]CChu[1uOMQ6{{krj*+F.YA;aKgET)*0RYPg!(hq^16X6 +ZU[KZbJSr@++v5q' );
define( 'LOGGED_IN_SALT',   '~ (S?pq8*([QOwmPhH1cvO#TDZH [RVxjL.~}t4S{<rWT_n5]SE_17{O![KT)XYA' );
define( 'NONCE_SALT',       'Z:H9<;sj$i4pzn6S=9ZBi.GRFL4s`i1Vv*_Vf_S zh}]P|<G]|#/$NZsTWHT<bX*' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
