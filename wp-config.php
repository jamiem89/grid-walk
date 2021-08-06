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
define( 'DB_NAME', 'gridwalk_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~KV1>d#Q bmi9Lgae1 YZY;c.GvGuz_Y2BVH].#2N_4yY?`XwGM5B+#CATlrO1&i' );
define( 'SECURE_AUTH_KEY',  'ewTu4k2ys=:9oiT!IYoWbUTy?zAMlDgh&KR492f)QCG+O<C2SNWNf]_dBR/U!g$&' );
define( 'LOGGED_IN_KEY',    ')L3(2Va!GePxoyvyxi7VUH>rT,mYy3EF-)>TEZ= x8(m5kbrvC>bzGI@3C)=a2P ' );
define( 'NONCE_KEY',        ']E_;B-*vlsB`iUgbb$kq9]X 39xC&|<M|T{.a.WC pe$vMF|>LO~>.o|;Z(Z0NeQ' );
define( 'AUTH_SALT',        'T/FS|D7J.+3jMBKwFht-H]GzS02o;)%{5$_fX!TQ!Z6_!>ZZZ9uJ1x,bm$i%](]p' );
define( 'SECURE_AUTH_SALT', '16TC#SIZHH<?E8O*sYyeL4Vbrtu;~HNj99s`[S8))l@6zCe(g_s[2O`mS&to*xd0' );
define( 'LOGGED_IN_SALT',   'U,NM{b9zB7Kwu<>;LD7$_Vd{j7Xa;8>G]G`yLc8oBH?![Cv@#C09Z4jF&nt9gNC3' );
define( 'NONCE_SALT',       'Te+,l-;u&av%YwMQ9ftAF:*JxZfV3F?It]K* 6#cDlR}9:K7fWB:j;()yFntCeAl' );

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
