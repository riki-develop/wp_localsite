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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '51m2ZfxEQBJVCWtzVOpCGxF7JvdIKFKJn6kboPeToxdD8vPdX/eD6YbEExYFYIirKaHfUTfPdca/JXjGvThaHA==');
define('SECURE_AUTH_KEY',  'RSSsV6yFYqDf3s7zVHPQuCpLXm64ACpvX6QlOWOrdMkw6OGNDuuOgLF5LiMFBw6QfchmdTw4kHo6YTfvlsuZ5w==');
define('LOGGED_IN_KEY',    'xctzMT59aF6yl1CpLPakn518qNIr6nst5IlDRwR2jhEOnOmUoc+cs8Xs5TvDEKntvQP8X6nfrgJAx2WGVy+FlQ==');
define('NONCE_KEY',        'YH/0VxauLPm7Pr2AYgq1+7kxKlD83l9IV9Pj7EM8HMHIAsWgHCHr6A40adexwA14SYHjoc3Xr9XjZwSYR7G0fw==');
define('AUTH_SALT',        'dPcxZC/FhpVjn+2+RPq5YHuPDT2pSLnM+vbyg8U/1fv3z6siHtVF2CHWQhS96+oN0nhxL4MSi01hoqZDNKzAgw==');
define('SECURE_AUTH_SALT', 'fhXndHjuhTpwT2FBW5hNELqX3Z4lI0UZQG4YB+WNYGCwHEtpiHFM79OzWf4ZvtE8Z+kyMb7J9NFaDrSc84EMxg==');
define('LOGGED_IN_SALT',   'I2d9jQcG1Y4t+h8cLPjwhw1xWViq71PBVE4rU4z9lAgCU2K/XVHaPJvKxZbAtfr9IvFztxrJIXdOreICDCfZRw==');
define('NONCE_SALT',       'WKBvTJ1LMW3gwj5rKZK08XIEkm9GSJYOtIGJJqCEWdk4nuh7tfcqgZjUmpCk6tpYgCs7MjOKq9uyv4AcluUOUg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
