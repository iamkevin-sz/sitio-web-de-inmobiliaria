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
define( 'DB_NAME', 'web-mobiliaria' );

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
define( 'AUTH_KEY',         ':HS(m)NKbUy!P$kK y[y$t|$kfuA6TR4GkdJ7H;NU|I^Ls)ntT5(Q;2}I^d2F^G ' );
define( 'SECURE_AUTH_KEY',  '-LQlo9/DJscJd6F-3)`) @TET`l~X?/j/[_YJH;jIi+-^Q%L6AV+Jb%#Cs=i(5Pq' );
define( 'LOGGED_IN_KEY',    '+R{.S`jbra)7=v>a)BV^?1Uzd/u#1t^K&]mRl`.aGWU0S<2+RBF/nRrjc@wmJC3|' );
define( 'NONCE_KEY',        '(j=l!q97lAGg@Rt@x,yUj$yXK $FTxf^&kM5<Xn7Yrx7oDF@hA:Kb!.;pOhSUQ9[' );
define( 'AUTH_SALT',        'Jxl!W6x-5ZiO`n9.-1.L-cqaQI|Q:J<sy*QkEM0g83>&yrcBv/+i(QbNS2+>M>=R' );
define( 'SECURE_AUTH_SALT', 'xa%j6-/LC<I[ai.te*eYe>u/_:ro,4a%p Q7]_VA;[t+5Fa[8x|1:#hegtf(jL<3' );
define( 'LOGGED_IN_SALT',   'E=+JBP&Bi_/`8+oiBVC +pe,d19u~L=hS@.g-~WxF1En23vjlOJK_UW,jSW-Qu)M' );
define( 'NONCE_SALT',       'Gnb2QpiGkRH &U!86Asm}FI[R2|DP!z)`Ar=20ofRC4N} $8W28:<3h*tl+|tPKl' );

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
