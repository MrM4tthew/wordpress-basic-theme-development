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
define('AUTH_KEY',         'yOgN0UIqh9dXiqkO1yewdN0r3RQRc08/uMI/JG1LdxdPRf9a4kxx6cL4OhZN4LHP0D0d5VwpDBTAKNp8RCqShA==');
define('SECURE_AUTH_KEY',  'Y0naVW4zodDaucowuu2Uj/S1jznB/gaIAcyLHPlW/MXZlfYuvTzk+9RgSiO+AvzB2+918NX318NoFT1wgWgpaQ==');
define('LOGGED_IN_KEY',    '+URowobEjazFK+I/x9JX+NPvmhmckW6AXjrLa4CVXtkBaAczf4Yn50JMyjBzB2kOA3wy/v5uDKv0Dv9xBN7mMg==');
define('NONCE_KEY',        '1VqMjVvNxdr8w64FmAQDHiGqZPh6Pnac9K7Pta1FegwfvFn5WsZBjgowMlMWwjn2ycAPEt1wPjC8ZPs2Dcq+Ew==');
define('AUTH_SALT',        'mJMz4skCufNCx/JRR3FZeJYDhU27a8MSYcUpz9pJyYdYl8NRoculrVIRgBKfRgmyGh1d7mOIlskV98FaSinkoQ==');
define('SECURE_AUTH_SALT', 'b2ZV8/NCI6ze1irI40F6ObVWHGk3rcaguJdmZsOC31/ylC9bwOhurnOc9jQVeK6EecYlC0oJL5OcyclTQBK34g==');
define('LOGGED_IN_SALT',   '8Z/pmUN/7qzjaD6inq4smm+o2/4GCzHgpXM/uH0S8CCylUOrPFJcJdHb+0KGRhyJr1KikS2Rp+JNZCfj+y64hw==');
define('NONCE_SALT',       'X66UhA79L+WORNFEsW/ZSARgZcg7CZ5RTT7vY/Bhl7HHiokAGP0QgCCJrlKYURliHInaaru1jj2lHMCkuR1K8Q==');

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
