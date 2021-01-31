<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'diaryofjaynewp' );

/** MySQL database username */
define( 'DB_USER', 'diaryofjayneuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '"7(*lWS82KzB' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(.KRg_>M>|~R:PZ;#Fg>jo,&+duUeEOfd_kS(Gp.6y6-][/^wza3g8xz~gaG~5_E');
define('SECURE_AUTH_KEY',  '9K4Dl^y}yg@r_IP#PUn%j_TS8a)T=m2A^5;_A&Ma4g{4PY,n|{wsg,>%2Da[uv/b');
define('LOGGED_IN_KEY',    '|+~^D.0}>a8?/bto7>K|Zch{bGmBZV<mQBUAUOa%et[Ogl=f#F(H#N:e[|}(X-$$');
define('NONCE_KEY',        'OuKJi$or)]*Im5]_e+XWcH8Kk@Gh:-2c3#]QIwBn<a$~pE~(KrFiru{q|@VmyVf1');
define('AUTH_SALT',        'ffb=-(eerdsBRO.l[drD~ZfKI)m$&rrxb#eNd^.&iSZJ3461{|Fx :h 8VekU76|');
define('SECURE_AUTH_SALT', 'VzRU[*CQW+me:WcmhX8v-7j;.q%z|FQCa6>q`g?oLJ4Qm8JK2RDk(]|U?u VRXed');
define('LOGGED_IN_SALT',   'Fv5a9hM8Q^3&d)BG~;hIXYQk01I(})i9:k`?C,ir!(+t<VDg%eD%33oK;AqNN`D<');
define('NONCE_SALT',       '^nR.cMA-,)brJ;@=/wMHnZfx6*nmGO:8)jtecE=L|fsj%,GSO(c+77X@57b^lFts');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
