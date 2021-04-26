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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'padi_shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '|:)$v0j4qPm$Kb7YzX9ZgJOt$`21Sd;/zX7U(3G-CydaUp6Dr:-sP&V}XK`@.Atb' );
define( 'SECURE_AUTH_KEY',  'h2N@==y{^=}ph,XSZ4F^INz>&[DZQa}J!ivqs)^Xf7a&}hB,A.1p0^6zNxf11;Qp' );
define( 'LOGGED_IN_KEY',    'U,IP63<UiTuWIkO.|&|m(j!Cpm<rgTmJ0>.#jX?bbjl~yi}(3OV<Z.(Q?giGUx})' );
define( 'NONCE_KEY',        'n6M+8,85SOm}mM`tPL5T6l[OHva43Lhkl@:c]3?!QlDfBM(:hHG6.2=_WlWQ+X)P' );
define( 'AUTH_SALT',        '*/ap-k(FH*U-)v,kW>3vNJD@QJgROV{1~;tyzWqrJ&u( 1Hhq|/60aZ-k@/4(~vj' );
define( 'SECURE_AUTH_SALT', '4 ~4rEASC:pMq<NcB&G:(Ec?|`p;!k.kv7NfV!SYi5{ML4L)c:co {faE.Z AtKK' );
define( 'LOGGED_IN_SALT',   'R&&kHm{TA#yE(6n2+>w+ttUSwo=Ix%#)R:dN,=o`S}w[%B0a*L1B6Eya5YNI-MSd' );
define( 'NONCE_SALT',       '=%OLVk u3K2Jej@$jo-SAGven#6xj1VxHH+[z9D@w0k^L Nx 4Ne*QklwSUwtxYz' );

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
