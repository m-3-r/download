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
define( 'DB_NAME', 'nextcadet_wp941' );

/** Database username */
define( 'DB_USER', 'nextcadet_wp941' );

/** Database password */
define( 'DB_PASSWORD', '37p!Ro1F.S' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('DISABLE_WP_CRON', true);

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
define( 'AUTH_KEY',         'lc9wpmrvkxakl1pv39suacqktieppsszymgsm7ueqa25fcffaogxbzuvar5wq1qs' );
define( 'SECURE_AUTH_KEY',  'zmtjcds3sceqbapxjuiumgkv9wji3iajzxx90iizikthvm16vmxqzjfuxot9iwqi' );
define( 'LOGGED_IN_KEY',    'midizwztst1z9gjqo2wcuoghu5k5nabpd2wquddko9gdmabtgmrhoawyuwe5mlqo' );
define( 'NONCE_KEY',        'hma0b7nby3zqhjohlfh3arlkfhhtogjxq5gsdsmkakkhax0ecowhklgp2fujkbb2' );
define( 'AUTH_SALT',        'qnppjaeldhaopjwhlxp35dvxhdzxipkxpcq3nkjpsl0pkllvklk2lf4f9jbxtgwk' );
define( 'SECURE_AUTH_SALT', '7g6mqdpva4zryhysij46y8m8n29ovycktodnotljxrvu4yr2uitctpuln1y75yfs' );
define( 'LOGGED_IN_SALT',   'zzmdfxqswujt438jjxtr8trh7vvkhlrzx5box7re0hix8l8dlvghmwjntw98qbds' );
define( 'NONCE_SALT',       'mvjudbsnxlj6ktnpjcomz0ungjpzihqepzctuj9e9h0qbnaxxse7hcay0oxu7yw6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpom_';

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