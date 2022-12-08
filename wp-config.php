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
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         '+T[TZEOhWQp8D4zpUF=h}HgD[@6&mLVZnn{]l) .DHF8/bG)KR9PWfh[X;z UnK+' );
define( 'SECURE_AUTH_KEY',  'aaQ~zVx x[>HCucT-dc{}zb,rNmQ!95$~%W;qb[dd-gI]*5$q|ugS~+CZ;!E(}i(' );
define( 'LOGGED_IN_KEY',    'F$vG~J09*GjmzmS)3EzGLXW&YNB/>aqIm?PUbK&Ox2l;3bS0.RG#l|td,1^zok@F' );
define( 'NONCE_KEY',        '3${E*GKaG48y;-tnjI@5w 1uK;U0=jKvftdms[%wT(N2`RX{1IA7nz1lH?H|%NV9' );
define( 'AUTH_SALT',        'L<%7hWO]BMc0e8!T+I;=?MzmD@Q@k9/POk*0SvK109FZ5 `Ga5#^P{ji5mu,dlQV' );
define( 'SECURE_AUTH_SALT', 'IvriK G,1RIU=zz9ctEkrBa.])^@h/6ASgu:=1kfF1sDTxyz<YFp4lT?e0(=HQBO' );
define( 'LOGGED_IN_SALT',   'JP}8|_;AW>2tZ!(LBENB<oPXr^udHP~(EOqiK4N$PHKmd16N&E9Ym5n_]>q<6Xyo' );
define( 'NONCE_SALT',       'r2~`t[]4eXN~S:2:hsT*Cq?:VS^<>HX]~!.i!)e(JR&{z+Weq:f,1(xrA=m)u5v0' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
