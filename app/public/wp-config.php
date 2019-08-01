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
define('AUTH_KEY',         'eXhUzUIxQHDNqQoq5tk9cwPrPE4x/ijDFbBSUHt3FCM/aBlQU7GXCBNA8Sfcf9+c2EO1TsZgzRjhba89f/Khbw==');
define('SECURE_AUTH_KEY',  'TNt8TNoKUSKPdKvq90ZGY+mo0alAVTC9Q1I2v66iZuuyiwjw996cgSMDVmv5/zCOttI4CD7fE7TJbOHL8l1gVQ==');
define('LOGGED_IN_KEY',    '+bcQxy2WEnCM/YCpV30WsNQXFe/l2Lg0x2kx5QyTn91mDsO5ehQssjpmA7RcCvt7dDsLj6H4rmiVKApvgPvEVA==');
define('NONCE_KEY',        'x4AZdr1H+pF/TZUK8RTdI8Tl+2T5i0UT3SnLUKQUs2H+O68fCFOWICY1/QtLts+ciJ8knZCG5T1SDDVA07iqIw==');
define('AUTH_SALT',        'CFahjTjus0n3lIlvmOYm1dSgCxihRKg43jqViPBroO8Ko5cfXllb3U1J4gFs0+VWEUibF4byu6Km6BkbXXJ1pQ==');
define('SECURE_AUTH_SALT', 'jhaYtWxkpT25gezNyDDb4Ed7yHqpgIjuqVwog11OtM+8QKQ8QcsK6e4hNmNp/yYcWTlILxOJ8Bb/ggZVnW8r8Q==');
define('LOGGED_IN_SALT',   '9KkmcvMtgJ6QzhjhHlyPVfTX4JS3MKW5PYFZBTbrkeYBiijnrhjgmGocuyzGcPVfS3qrP1yV3gXL4TesTiRW1A==');
define('NONCE_SALT',       'lIQuOQddVtUhSmRHMvgMIcN3sBpOR4S8M9mPMvUdVyWwwd9jK5g2/67PH/bYhXjxfyaR73JfkBkSOQbFVBRu4w==');

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
