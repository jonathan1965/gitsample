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
define( 'DB_NAME', 'gitsample' );

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
define( 'AUTH_KEY',         '&{<Ui<@dcVJ=E(yo|G/s#{>k_GJocfz1jBd&JXQt]qz=1S)4XdFS<1 [aXS-fF48' );
define( 'SECURE_AUTH_KEY',  'WDqd<RJa2!<bof.x00R>yKCYvLZ=%7f]#0^v=t:]AM8Q%czMj77+zk6%`p]e!Ins' );
define( 'LOGGED_IN_KEY',    '<5AK?Y9a2M[6/t)7F,+te_BFLn829aL*<Y|6PIfot$4V!,,r$bl6r-qgImn;5yq`' );
define( 'NONCE_KEY',        '5wc-S?Rp[%9%6X ]WGht$l%|*B-myR<9gXIC;j*wE98a#o,5ZX ?cs~t<#UHY/Q$' );
define( 'AUTH_SALT',        ' q~&mz}o1n[:!^g2`m[?#JzuDt?)2dLi.uK4bsF1Qk?7?:*LR$oz?yF])t`4 YL(' );
define( 'SECURE_AUTH_SALT', 'V#TnWd3Td)JaWQZbOufy?}_Zc[2C60TCa%!3pLSo~H1?-CA+9xn+GwL6%m]d$JET' );
define( 'LOGGED_IN_SALT',   '$9L@?iCf!4I>$7=.6clf9wM2/ wDN<vwtTJnWhJo!|XK`l,=BAJfD x-F_5jl;li' );
define( 'NONCE_SALT',       ')x1|Adz9Q)zoiPA^<:KROk,}8,hP}~guKb 8TX[x$k@N3ns28@|BDb)`;*FyN*t=' );

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
