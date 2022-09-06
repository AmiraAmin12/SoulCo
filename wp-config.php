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
define( 'DB_NAME', 'soulco' );

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
define( 'AUTH_KEY',         '&xd45X~<*YUsUkS.xk}6zC=q&Z<PG!b/>nS^z_:]l(Z-Meov/~O~J>u1Q2Tfy`Ri' );
define( 'SECURE_AUTH_KEY',  'e=2sh4u v5m@X&h0x b8FH6?/njsetr_jv~6=N#,~=r|KZX{9d.!aM.g0b6mfx#v' );
define( 'LOGGED_IN_KEY',    'OKK(><?M~J$-O4,%b$Y5pzh S+=!)`rN8Rv+l~5i#A!,kCBU.#{0s6{^qLEc%.tZ' );
define( 'NONCE_KEY',        'kD!Q$G R+0GKbTyEh]ZOo,k%3R8]wWYPCQGy_!l4RS$w)E@E[SZ5!Qba0=[RX;ht' );
define( 'AUTH_SALT',        '%8n&}s~cFglh i$<]_-O}Kki_:$^5p_fwQsNZ{cB,x-W@$kH@nGus+<4t5n4uTvm' );
define( 'SECURE_AUTH_SALT', 'n4Ha&,}.+VKk{S4<E}3RrOjy&DqT(eF()ycum|.>,(]=z@%[iRU^+IxnBU`:0n^e' );
define( 'LOGGED_IN_SALT',   'eT%nzBgEj JJaQwb<5ZLM Jo8`)e4$uETq5%}GPm@Pxnt]$NV9sjmrgJBb8AdW<I' );
define( 'NONCE_SALT',       '`Op!7sQIvCut_se{7?9V+o))9D:UpWEb#n$e~q5D9q%OENz{n6&#]r-7 wPz@`qU' );

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
