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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'ET8BSR5MVfNivIf/80rJ7YZ5J/RF0RPcVCECDnGP6lX+iyLdm/Vng+xCHX2EjzW3GrIXfRq2NDWEvl7nbgw29A==');
define('SECURE_AUTH_KEY',  'DhSD/ENmW3GfmJ05t9q6w405G7Sg9TW661p22SeJFWWo7DiMKBLBNSMt26Yd9J1/l7wROl+7dWnm902wqv7JUw==');
define('LOGGED_IN_KEY',    'TkblOcmpNS83McHNp+Ak8GI7enl41/+Ehw1DLMwre1k8fRR+YzFM/JBbHs5Dunu897CnLAshFUt3W9R1iFqZOQ==');
define('NONCE_KEY',        'ASrhD9jn9AecHPi4eaAeB2r7jOD0AxVwllrF3ZT2gKEswQNAMO9mxZV63BQfo72L0N17VPiGuMOH4aaHFo5YnQ==');
define('AUTH_SALT',        'VPvECriOfNIugt8BsdysuWijL4k3b5SOmg/ao+DzuroYVpoOxmQbk5YQ/TEpl87opMGkdgUgaMZ3giZv9MrpsA==');
define('SECURE_AUTH_SALT', 'fEiicXPq8qKVri44GiAUTp9C0mGz9Xqw9JDXdCpl6YHAH1LFUt/t9TucdRT30y5rzx5L34ZnsESCtR0cTxADCw==');
define('LOGGED_IN_SALT',   '1D8Odh/dLsLV4J/5M0AjrYKQ9UwHQX23wiIHeZPDkIFProrilJvkGFStW7+z7bz4FYYq0fq3jGDuDM5x3Mjppg==');
define('NONCE_SALT',       'DX/Nt3y3QD0f8NGABt1PeIYqF1lmBYekgukOTT65uYrWLZzwcQiqb2S95OlyNHa1fV4FyHSYubP1YmlswjMjwQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
