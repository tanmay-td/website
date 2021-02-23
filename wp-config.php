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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'dSl&p!2-IqVPh`u:xc<OyC8LoBrm+P&B<m~f6!d>se[@?IYixxU+4nSBYK*P{e{@' );
define( 'SECURE_AUTH_KEY',  '/[,=fD`1/SMB5rXqa$I0_+vy:10J%D[T|}3BRt/VleXQE!a]^Q}vrH|&[]-:IfD;' );
define( 'LOGGED_IN_KEY',    'svCx8@<diLyDX#5&LX~|TH&_KXWwNMduls&MNC~A`7qb]gQGs[ym<Z94c^j*/lXj' );
define( 'NONCE_KEY',        ';}G-]X[,U00tM!n*M3nHuu<4B-ey-jR<}2Qdo{VC#B}wrvEf_/5$jEy^{RvW.9Dj' );
define( 'AUTH_SALT',        'Si[klOLA>&xO+FDgr0CA-{M[o@2}fu.vo&YVk:FiPaR;)Q?:ae. w,bYyiG3XH8P' );
define( 'SECURE_AUTH_SALT', 'mU~$yVHhq+i,_Dn2fkRQ3:YVKCic4YmoRAYq{Mw8_VfXkWom/o/} 8hlGQXe]Q==' );
define( 'LOGGED_IN_SALT',   '#tn_0/WQ6jZq1ywVQtC!{qebe9y1Z9=4BZfX`^}nO;M--b]Y8k3:}GCi+%B)??Y[' );
define( 'NONCE_SALT',       '%1!Fuc[G:x[c.}Q#S[Q!6[=s?7|09:Ayr0)QP&.6A{]7 ^j~OL?J4;WQEMvNP#pf' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
