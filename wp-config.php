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
define( 'DB_NAME', 'wordpress3' );

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
define( 'AUTH_KEY',         'ei0dFISq>l~1flsPacMu]|fEF=@:lJJP9Isd)?Y8Ac4qKKC!+Ixb9iI)}6AE?!;S' );
define( 'SECURE_AUTH_KEY',  'm:ZfoO+YWzFq+~){d8NdVT3EQEHN36NA|,bmZsQ@XCEF5RS&yY~=ikgk1KSXAi.s' );
define( 'LOGGED_IN_KEY',    'eNJZ5~VjYE+{ofczP ujaf#mD(rj4@f~,_q:uaUg<`l2R?h$Ju>}2<MwM#vk)`7h' );
define( 'NONCE_KEY',        '[<&?waNyw4Ws^2,RXLW80y@|Dlwqd:`u:**l2Bc-wei3nU|eA_B{Apn,Z/(:?&rE' );
define( 'AUTH_SALT',        'I(7Ji`)d)>-Xlo<T&f[v{+GzcTBwSU]4h]Eu?^XNFov]HF]<{&7:w+!T?^7CA|#H' );
define( 'SECURE_AUTH_SALT', 'vOf<A$8!3<tBkV<OhQB/dd)3+|5d>g ^kxJe_L4P9BjVDQ=/IJS9d8:t.)a0#FIs' );
define( 'LOGGED_IN_SALT',   '^8!K_k<l WK1 ez7^r|QNc9v&fU!m@<lg{%{/!Sa-aaM+51.R$aj !z>r^vjNVg(' );
define( 'NONCE_SALT',       '@R2|P2J21Dk)(}Qn-LFDK#c9[.>o%n@z~#}Ua,_}~|7C2AWYdG8NV}RKfy%#r]5X' );

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
