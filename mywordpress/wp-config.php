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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '%8 zQoCO+z<c_m&ZZa]N> N9Em_;5HG)-QZ:cm{L1hy0Ms5oriHhk0 ba_$?-~g?' );
define( 'SECURE_AUTH_KEY',  'jt~m#ot2NW/?<6yC6A0iF>EL,>NF|]pXMa@49tf1KhG7y[~tf.*z8KUEdoY/Hxo[' );
define( 'LOGGED_IN_KEY',    '3Tz!`JmFJO}W@Di6coCyv,O~r%,}BC-Mf?q$0*v6F&0z6@j6j@Mp(V{0wTj#J_Bs' );
define( 'NONCE_KEY',        '<&;>4X 4P~c=ZajtF.$Ny9aN#v3ja8+6nmlM>-l+3|s9_$<=h/=F,8kFKfc{8y%i' );
define( 'AUTH_SALT',        '~&mm`GVP<v|SXA`.s5{?-^mKa|OxV;]wAreh@!8-vU(9ty%q~Y1gyN+)AfM)|db@' );
define( 'SECURE_AUTH_SALT', '5CI7d9*r~-2_%zh:kE#r1yklXwL&;Ln{MBn6zhd@=IrE,/i[2/#NMkFrrLG)d:Tm' );
define( 'LOGGED_IN_SALT',   'U;WJwA5oT$J.Au^l:4*e+]^g}aZhq?-Ohs_|oOk):p(TGMw8S5>,D9x:Wn-S0^h_' );
define( 'NONCE_SALT',       '~3Op.@,IwYj?/x{Mw$^z:R^Fldl/nZ xZ.&1tl2UVUk)HSy.]G jsQ|Hk3<4pR`a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
