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
define('ALLOW_UNFILTERED_UPLOADS', true);

define( 'DB_NAME', 'fancy' );

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
define( 'AUTH_KEY',         'jTvbgNAaW5Uxsnmbw3F2dKOP29fl7x5tUJ9ubvr88xO3mKnr4flnSpkY0PTad5n9' );
define( 'SECURE_AUTH_KEY',  'HYDdugG6VjlGLOcKgF7A21PMUXEtE0DioT3Npn0dQnyQXqlhodfqvPdVw89rseUZ' );
define( 'LOGGED_IN_KEY',    'eDwlWg1ksQbJhlJtPjA0SGWBi6ZXYiaxIWsaXSE5vyddjsFSqfEDvsvihIDmaS2T' );
define( 'NONCE_KEY',        'qbFH194fo9HektGlrtZE7Kz2RIJ6idnNuDCRa33A0Oak56l00WUCt6eLkzlBjzSS' );
define( 'AUTH_SALT',        'sA7H6MT86afKwvu5NBCjBrh0zFzjl8erdULYovruMhvzKSEPboVeSVwt0gWT3ENI' );
define( 'SECURE_AUTH_SALT', 'AsyVmmfDV0Z42cYGwXU5yLJQN3LhLC6faEwDNNrMpPpwGYAR2nTh2PRfIfoyPTSr' );
define( 'LOGGED_IN_SALT',   'RuIuCbPb2qGknYDqtkYHes9PQ5Q0s0iHcOjSbNoE40VkGTTuyC7HJzEMvpXa4KSi' );
define( 'NONCE_SALT',       'wuZUFLxgMA6LYn7EQBGKFCB5UKiXA7uPaNwjk4FZJMG1HYIzk47OnDIzeKWgvhwI' );

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
