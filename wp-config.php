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
define( 'DB_NAME', 'amt' );

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
define( 'AUTH_KEY',         '1p]|{J:,vB3=Mv~b/JuV=4?mezz<T3+&=Ve5)JK~gK5vOyf8#y>yQOi*sw*8tAan' );
define( 'SECURE_AUTH_KEY',  'r:7J*hb>#d>)2Aa1-~*:dzh)o[n~1*Q$=vmI(g%w[4KX)b?l8UU~zO`[t&9<8fp=' );
define( 'LOGGED_IN_KEY',    'K*5ccD@#u<E[CV; jrj]5p8`4a-buFJ%/]T0<)m0Mo`~ZET ^%([vQ%/RLJ}%os.' );
define( 'NONCE_KEY',        'G_rL6;vT*/ejH?vpJy.cqHYFhVHtU 7Vd,YVQn!dxO@{*mQ}jEV>H+x<|TAJS8C|' );
define( 'AUTH_SALT',        '6dUIE+sWE7Au~SUpvAv-NMV3 w_#`=x*xR91X(ByxAU]#SOzY@=N(U)Li>k)` 5m' );
define( 'SECURE_AUTH_SALT', 'D,7DW/Vi3!XF`5Dldhc:2)7qdlGFpcVL!p(dCp2hq`jS.z~Gk{1_g`:/lYBnV]rI' );
define( 'LOGGED_IN_SALT',   'hiG;J{qyrn|&|Fzxq@(w3XBfLCf+T`}DbXkkF|P:<{5N!{6$;ba=[Qm>:B*_K7cq' );
define( 'NONCE_SALT',       '`Z*UvaWU*` :)*Z+)}Rdg@7`7sTR`?YH|jY~@3`0_-R2gt~_h%B/A8u12_mKeQ)l' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'amt_';

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
