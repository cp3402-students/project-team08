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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '<<x_q:WwrFZDL)T+<nlVQK.=L|kY[ccQ_Vjv9HpUpy<JXzpuGTC_rx5JRfF)P^-1' );
define( 'SECURE_AUTH_KEY',  'xeNDT]]t?=U(;8g,bY%2MI%^y4BqI!gtyLs(Lm4zO;y{bWgK(=xXtCqL8Qdf62vY' );
define( 'LOGGED_IN_KEY',    '!+c,!w/4:u(ls;ABT<D6~+~p($CIs;6~+RqjK5U[V-@Xtk,CgFy.H`?hGon@7o].' );
define( 'NONCE_KEY',        'nmug <^{D1^ gti-O{l!U04pctCSa( Gp(MXDN{7=<BfPJ_KfQ6r<n g<- ?_e2?' );
define( 'AUTH_SALT',        '5.DcBLniiZ<qgqx3ZT(~O5R2`i*RE+>(OILZXs[%F1*{!?jOP1jISM[LK)#u$~$4' );
define( 'SECURE_AUTH_SALT', 's+F7]##u,tS@V 0*P.Nrq:^RRM%=c]|CBc.%6;J={_E5o5XxagZ:S/q+vPaM0HkI' );
define( 'LOGGED_IN_SALT',   'PMmn[x^Q/1yWbd?3DJf_^{2bxD^;pjxr$j >2BiYIf?)#u^=_Pu6}E9}hEvBuKr~' );
define( 'NONCE_SALT',       'lQ}?An5I`v*%PoE1stHsy&HJBK?7GMWVY;7$tTR3rq%w3zX@4H96gHZE7WQk!m%r' );

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
