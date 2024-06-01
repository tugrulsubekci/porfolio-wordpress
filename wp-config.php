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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Testpassword@123' );

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
define( 'AUTH_KEY',         'B;A4oAGz*?`Xo2{IyhV@k/QSw+t}QeX2R~@tk%!5XXa!RZ=^d7ipz])w*otK^ <{' );
define( 'SECURE_AUTH_KEY',  '`ns=sk~`<::St8aQ-u}IMem;uh[n]PDo_pcamLij[acm@#Z^Vy2kxVEEesK[n&lu' );
define( 'LOGGED_IN_KEY',    'k#M@az+K;,+nw0y9dd/Y{Ngxt2<IBugOTUZSuti) S>7LunDt~lg4pOlX@qk#hn=' );
define( 'NONCE_KEY',        '_Q4Lr5~D{;V5z-FO |F-F*14c1]%ZdKy+znE.2E(Zyf W>tE$luWn~6Z]+fz$uH~' );
define( 'AUTH_SALT',        'QNnq1F]:X+{Kb33JAl29w!H7w6|/lNP^eU{x>3n3a5e?VEN8&RW@L9ZRm6EN:>Oo' );
define( 'SECURE_AUTH_SALT', '4@XO]3`hFbFY6dUhLgk-k~ =Q8H4V/c;7G(F@WAkUExlt0vp;@J%,T*bjPB]UJ%S' );
define( 'LOGGED_IN_SALT',   ':`]$E:^6oa2drfvXmp`yNa>>X40PqQNx8+SV&x~W zH,$8XbETG6UVX$}%mm vn0' );
define( 'NONCE_SALT',       't[+4n@%HVt3tL~m-:if[XCPax&I2TkA=v&+Re}EVM#PD]swxC7V#Bs[{,}|VpesH' );

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
