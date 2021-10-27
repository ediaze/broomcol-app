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
define( 'DB_NAME', 'broomcol_wpbc' );

/** MySQL database username */
define( 'DB_USER', 'broomcol_wpbc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q3S4w]!pR0' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'l0ulvjpvle30q5vgivf5elkjonsaji56w3eecoz8r50pzrsshpxnykr8bdfqj90m' );
define( 'SECURE_AUTH_KEY',  '8ysjo2oxynbb8xmwvkyks8ataj9sclx68mjxys1hghqir5zpshqfflzizvthfm7w' );
define( 'LOGGED_IN_KEY',    'zv5uh1atceliaifzkcacwmnlfjhj1wijqvpveqecohwyva7w0tqc7drme7ledxan' );
define( 'NONCE_KEY',        '71rzuaq8zrz8ophmhjan2yo3nffietsx0neraph75xc4pzsbdh65ih4bacrxlght' );
define( 'AUTH_SALT',        'znazz1ceh2qaohv9flckegs3ecxuogvaxfo1srhigwfyvidywrueziv0yosrym1q' );
define( 'SECURE_AUTH_SALT', 'xku9bqnve8yjqthuncs0qivbrozlzjdbakeahakbuoenmpu1mxrkoxmrk0n4tlly' );
define( 'LOGGED_IN_SALT',   'f2j7yaegaqdj0ugtdlpsoldk42rqc3wgxrdfrhmzf6xhytaxqwnz641ooiqhjjxw' );
define( 'NONCE_SALT',       'lzvpox3dtzwtm5ra0mwsszalejdblpha8uyi8geyf2oeyauga4uq9cevxsdie79u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpbc_';

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

/* Add any custom values between this line and the "stop editing" line. */

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'broomcolombia.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
