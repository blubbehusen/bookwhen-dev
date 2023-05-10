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
define( 'DB_NAME', 'wordpress_bookwhen_app' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'bookwhen' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'kd!Gt-av~4/:-M3M$RQ],TW.X:5p$-3B-Ips)#ov!08s2}d2IQgl.-C~Q/hb%GVB' );
define( 'SECURE_AUTH_KEY',  'h1!f1VX^(w,7/BdQNB=&~b ,o0&FPAw3=P*Tf#m:/7;/u`)*}bCvIy<._`?$iTa9' );
define( 'LOGGED_IN_KEY',    '9:AE!*IvwuDQ ;!CwB}QA[^$3[!,L Z>=d~o CVJJdmsPu4y~tdntabSreC1|OVV' );
define( 'NONCE_KEY',        '/-@*Sr%&T.dNmunz4u$0({FV5tyC3faw`<qV/P_+{ey3UFF*@dk{Lb{<C_8ML<7?' );
define( 'AUTH_SALT',        '+NDn zBDVf;9Q+hVwh.!rdq[]t?tL9~!y!HaVugbD(@td.v?C,%n; f}.Y6Zy_p>' );
define( 'SECURE_AUTH_SALT', '=opL GmM5Wm%53mewEj.gLone<VT`JR/3V7oZ~3 Aese?b`2z1VmsgcCXZ?8(Md}' );
define( 'LOGGED_IN_SALT',   'apO1p)G{SxHJsy&KJ9h50?)Ji ?tcbR`imQ:5+q67rKS!a,#Bu^||t5^h}H=)Hcq' );
define( 'NONCE_SALT',       '4WC*_FMQc>21c:t,_QK&/ {Fnz)ttQRx`5~vxz9-wPNFhz1N.5< Zob&5elIAL_A' );

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
