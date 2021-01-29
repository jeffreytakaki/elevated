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
define( 'DB_NAME', 'elevated' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FgsEE0QokaXAPokh' );

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
define( 'AUTH_KEY',         ' ~dYIyQ*GgyPUK-X+ [s3Gw!6l)^y/`XPB*|Kq)7*M<Br{[bQ0`Iaf1nlXTd5C8a' );
define( 'SECURE_AUTH_KEY',  'J%*5tgQ8~La<*0S@;x;WuKpl).c<5/S|Fr_j|k!qCj34OVn+H+H:-+$yVlGO7o,Z' );
define( 'LOGGED_IN_KEY',    '&L>cC*pp^u(@m:|fv~%0GBKXpvySx}GY*KGzHRwYBMLhhJJd7kL3jEkKd4oY,Glp' );
define( 'NONCE_KEY',        'rHSv2j$]h9Fbq-LABnhMl[kMG&B7v </M=n!O~J!qD|n*z/h#F5Cx@[KV?XZ%<>8' );
define( 'AUTH_SALT',        '&jh]4l35/[4#58rjbqr]5Z13,uLX;=J@K-S_rWBDIE*tCunt^jsWC~F62r6r%N?p' );
define( 'SECURE_AUTH_SALT', '.>}P?6d.K~7qCj|xS=_HJ4sfo#,ygB Ualm!b67K&Aa5>?7|HOJ=*9c erqRaC?0' );
define( 'LOGGED_IN_SALT',   'E9u,x0*K6j}:jBKG8=D)*D*U!T^:qsAFOw#>k-_Y`,8j8VYJa4k13;tv+gyy[PXk' );
define( 'NONCE_SALT',       'QF2*t(UcE$]rTLZ~!BhsK4(o1xg$9nz6H#,w7Q1*bH+UcFx?bE}:K$`)|,Y722`T' );

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
