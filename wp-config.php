<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'WO' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',~TT96|^61$8:#sNUa77,%EF@o226mec.&*0TjGVeU{L#UL@?kkbg{Y`,y8Et]XD' );
define( 'SECURE_AUTH_KEY',  ' O[p)=?-Vbhmd.m=}NB@/-1J^oTi:NpuUH<sO[fT)RbvjESG9(t?@f@Iy`_;W#/M' );
define( 'LOGGED_IN_KEY',    'MQD[3yzrZM!p<Qae(hM><i-oi[h8zUFR<fz+`^4JW&4TrF&JmB^ZUTlszGKfyhoe' );
define( 'NONCE_KEY',        '~3Tm5;Xq xK@EMD-*OV{X<o*I)v.O3`DwiW4{!l^08Xl)?[CSO4Z 5Q7! dH${n4' );
define( 'AUTH_SALT',        '3^<g#g2&`Hg%wUq+kh!%~0iKFg{[3as{L*Ug^/In4b)-`C4v5tO(dx@dFx(5}fXa' );
define( 'SECURE_AUTH_SALT', 'e !wq<uXamAQcJP(blQ~4>b>7 (Pk?B=<!iJTSp`E+]01O^(:0Y<:%!.8Jc7fsg)' );
define( 'LOGGED_IN_SALT',   'r#4|[zI!P=Qvly_wr_-Vd#n(-4c|(<JuCm=dS6G ~wI1[D%C/X7gH=KNVCxF|gj1' );
define( 'NONCE_SALT',       'Bp9,5V~QBw%U`zq+6Ofx&H<G,RvSw}5QvWyrF>Yjgn$6gZ0IX@xLW,DqA(+wtCs6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wo_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
