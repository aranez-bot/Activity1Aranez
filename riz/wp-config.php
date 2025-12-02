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
define( 'DB_NAME', 'riz' );

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
define( 'AUTH_KEY',         'b63YNqGQtW4yRJW8tvkyoxCAxm2PJGBImUHPfaLw6QE0FYg8tTIJAgxh4YJ7STBB' );
define( 'SECURE_AUTH_KEY',  'STDsfFe0hKQAemEXibAZYAGGLagejQuAKn9MLmeYLOVn7PYjbbmk0Ihq3JlZ20ED' );
define( 'LOGGED_IN_KEY',    'W8pxIWUe1qNHcCFk7IL1C0YGEgS3PW1XS9tpoMP1oDNcco080t2qtTfu7Rz5rXX7' );
define( 'NONCE_KEY',        'YwQxNAK7GsldoEt5tQpF9QFOmdIgSQRABpDwCffV279rSbrNbV43SJwbVyama2SW' );
define( 'AUTH_SALT',        'cTkYg8DeGpgjcZFywpmxvNT66YfYFXJANB1KdlOyFIB74z1bQtXvLJW2dQto1r7y' );
define( 'SECURE_AUTH_SALT', 'BfRP8wAD1jwYDEgMiqDDLYEuOzs0aiBVsIA3b7xVjtccJxPi87LO8UuYZIwaYcFV' );
define( 'LOGGED_IN_SALT',   'epMaMsrvHNxOtPundhMj4gxSH79nP49k2dCXVpC9ZJqikSMfYH7sQCQptCTtK1VI' );
define( 'NONCE_SALT',       'fwNmd0pU3agNxEwsx2zq74uxAiayWeGsyx55o12MHhVfVneE5teNwGt7UIGfKvP2' );

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
