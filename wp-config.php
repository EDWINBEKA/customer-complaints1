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
define( 'DB_NAME', 'customer_complaints' );

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
define( 'AUTH_KEY',         'BkHdnf+}KsNQDX$|Ji{2@!A2$V#3kU=$+rl2 $=B8eSA.oOF+t|rMy()5tF#(.`*' );
define( 'SECURE_AUTH_KEY',  '4MeU!Ed<6JS{PI{xZ&f;yMn_&xF(e-Ff@>BcZ.8K+V:L.JwLhdu-y%276OO.{U$&' );
define( 'LOGGED_IN_KEY',    's;0ox-X0VT}_rouvB|l/]^KCSe6JV,O&.ldi-]CYa6WzJe$k|h7opo9qS-Ggxj8w' );
define( 'NONCE_KEY',        '/:zapM_113#.$(TfUOV2stIKV3N3,?G%oi{1IgE}cKNN6Q7oo~/l]/E{m@b5+$1A' );
define( 'AUTH_SALT',        'g#nDF3&fP*grfGdCEeSuS27~Wqw7n,XzP:!mA;KI; tI|Do!>-+S/_sW332895oE' );
define( 'SECURE_AUTH_SALT', ')?}7`.ha[d)fBZm>Z=f~y<NQF;WmXNKyXR2M$*,(k$TE-f-H0Hvyb9:)MiM5*&<R' );
define( 'LOGGED_IN_SALT',   'v]bc5bP5{*%u%6xg#iFyz*7:Qmbbp~dW{N;&)C1]5Yiad6X_{~KagXKNhS[]W|`G' );
define( 'NONCE_SALT',       '2(X6G$V*7`ik|iiFAX1Y{c:8~7?.cv3- _O+[mvWj-O/1n37HdW,PULmg)]W_1{6' );

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
