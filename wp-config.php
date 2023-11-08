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
define( 'DB_NAME', 'wp_racunarstvo' );

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
define( 'AUTH_KEY',         '6(jbFp1;:2Yf;0^i UQ`E{h&a(kn&f-#mZ?Y`Qmm^{Er)kqdD.>hArH9,$,:HK5m' );
define( 'SECURE_AUTH_KEY',  'il)9c)AfSR0}s9L<5N`1uVVNm4o[G0A+Hg/4in@4x$0kJ|Jl+2+ihb xfb%EF{p;' );
define( 'LOGGED_IN_KEY',    '[|x^zN?/I5OCa$uh)*+%B=zqsN?C#?~#t1l~^BX]47ZsLV hjSszj`P7pEoE-+t}' );
define( 'NONCE_KEY',        '5m)hV,_0|Ui} l!11a{[N?IjgWo6j8Dek?X%L>{!thrdc~XNwq_;nK:onsXR.R#`' );
define( 'AUTH_SALT',        'rGg2,%nS{gePQB)sdy_{@j<.g%q?tlW$y3sqNT<Lqc-RP9^&Z|},srJ6)DmmwEQ9' );
define( 'SECURE_AUTH_SALT', '?T+&xSN(z-0pIjq}l](b.E8cm&Dr=*{rR=j6@I,:E 20c8UR{}H*M;4og8UbJC>I' );
define( 'LOGGED_IN_SALT',   '?>q~b2vHi=8FbF!<Xve*>urmW)?Te9Z O/Bk,C{75]WC0@rGUcVnl+-a3<[|&mr[' );
define( 'NONCE_SALT',       'DcLM[%(=B**DUV#;!{rOG]a}c6NthQf.HFnA`cdwKr{vqt{6EYlz%)w_=*qyOJdw' );

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
