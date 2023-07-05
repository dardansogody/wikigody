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
define( 'DB_NAME', 'WikiGody' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'mGkvsDvThnrwdI9gUOgijC2vSA9flURCIRqke7bzxSmDiAl4TVCIfX51wufWnEv6' );
define( 'SECURE_AUTH_KEY',  'qmakadcfi4OzwYGEikKuhet7qjMwlx3MD6frcsBK6gya4Fu2R3xBox1JJLEKPkrr' );
define( 'LOGGED_IN_KEY',    '9UfovGDhJvR5mOFbJn9CDerh9wPqmVRX1YQSOtUACJ2pelZEvOjgv9myfidQJ39T' );
define( 'NONCE_KEY',        'gfMm1y24Ru2jduGP2HJxSA5A2v3ShWmzKa63zHJ1aQg6PXSRlCw7trGZXsRdx0Qw' );
define( 'AUTH_SALT',        'cBgT9ylyFxPYsRjJCB1ggHaLTGyPtKRP1s76XioGIOnkUZwlylQ6YARic1LQfVfm' );
define( 'SECURE_AUTH_SALT', 'rf00f27a20zBoqgSHyNF7x0urdSAcz3kpBaiihYAhlHibEU20yFPBlV9STSnOVvv' );
define( 'LOGGED_IN_SALT',   'UIrT91LfJm4oIvQoXntFXvfd0IGo6PSVG9E8pQUkRnFfmGrxiH1TBEOsiNksbZt3' );
define( 'NONCE_SALT',       'MXaxdpn507DW4rt14tltJQ153ZCJSIpVlZMEECmDt5oDWEmCDUM9sFEoTkPNtrsJ' );

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
