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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.2' );

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
define( 'AUTH_KEY',         'P U&@GefZ]??3oS!bPWL#gH;S|5vsq}(:)+9FgT+4o ]jB.l<B}I}0%&x^,nv3@s' );
define( 'SECURE_AUTH_KEY',  'FA1:DanJ16ZNviS&xwK|j+qik7oUUz9z[blG|{Vi&5kg;1.7?yFSp5*>,{(ZaOyq' );
define( 'LOGGED_IN_KEY',    'UM<d;EvzAg_jK~Y-.h/}1YR)7~:1k(`^_Sp~3?yhKxG%#c+ezs<]vC{cbJ,3(;`S' );
define( 'NONCE_KEY',        'Nv>>d+_ff{#{c>q=?(T76.|KDeG_Q/w]A{^7Ndt2_.B;{,Bfv&A{Of<UC85?N+by' );
define( 'AUTH_SALT',        '^Q;%,mBz=tau/eQstIUhe1mdQ,c(h$TQUO<P=,:+uvu$WG(2/^ulttuRKE0ep6CW' );
define( 'SECURE_AUTH_SALT', 'h5uSo47FoGV[&1y7p%H`ALShC0tvJi5oJ?BE:[|j$(MZ^[G--zFrVKDO:B^u,Mz_' );
define( 'LOGGED_IN_SALT',   'M,#XG{BD+L!QqH+884l{t +Xb6GvW.rZ}?3ufy.ZP*x%3X^<Hg>9|<)RhaKSkRkG' );
define( 'NONCE_SALT',       '(Em$Ko^1Q[chk1!WwzU@s{fV7f-5I^nSm+Lcx|e|j_!_0PUl,[;wHv5K#PhX:-w~' );

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
