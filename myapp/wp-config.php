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
define( 'DB_NAME', 'myapp' );

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
define( 'AUTH_KEY',         'e0BqugnMOqmx74Hz2VPfPKSeDWr0KTeZhW9nQ2JCnCZPjq2YtUXNxKk80HAPxqyz' );
define( 'SECURE_AUTH_KEY',  'wE1qUFZw955CAEYt51yuukIHy5CB29UWbPPbKqyyucZKVqGu6o2WoJDlOrtmRnnr' );
define( 'LOGGED_IN_KEY',    'LL97aIMkG3P3D1xNeE3wi69VYG4XlGyXrGMXCO1wwYNOMbq5LQHqaKeRnUUPxsrz' );
define( 'NONCE_KEY',        'rwcsW8n1TzFEgft1bIDbQV42WEuw7inPAB24bQd79r4hocP3EA6t2I1l6QbzTT5C' );
define( 'AUTH_SALT',        'O4yVjav95a9AHuVLZ2JmD6vsIx1ffDp0WtQVW8NhlwhcAXaK6NRgMoqYlIKLf9pt' );
define( 'SECURE_AUTH_SALT', 'JkkEP3S7nAoYpEGSeAYRi9cJ8qDhwG3IRXf2c59agicgVB7hnziMfb7BB2a36Rfd' );
define( 'LOGGED_IN_SALT',   'B4iK52x81G1jSoUGonvi4mn5SLGcTh3eowi9XgsxmdqL8EnfN1WKfrsd591jup3V' );
define( 'NONCE_SALT',       'WErDx2RyIDWwfqbSUfErjJyRNNrizrGpTQRs1tuRo5NydHLbi1zEKy7NnUj9eFgW' );

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
