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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '(+JGnStR6!ve{?.g.bMLP!A|w639/kfT|U0}%G3S|-YXXO65w3s}BK Y4WY_4kWD' );
define( 'SECURE_AUTH_KEY',   '|[V&X[,ul}ufuo+Ffmx2y)Z*kq]gQxIWGo+RJ[^S|0@q?k@4X9Ng^cfRS[1<^:.}' );
define( 'LOGGED_IN_KEY',     'ZO/)~8eS3Rq/AZ]#RyS)^3G#kn(bS)SoV}U/=e.) IDa0U!&7O0AwhrUJa=kBR W' );
define( 'NONCE_KEY',         '<eufgM3[p=?.qo^3eaNviijC{8 {mxs3vEeBid%K@c&dtnJ)ER8I{m.hf[p-s83v' );
define( 'AUTH_SALT',         'iv4!ST2^6p_2Y[D*(yU_y1u2v2mU3kHU~gRd>))Z6PZCUQPKY2,4=$lM8]XVRzX^' );
define( 'SECURE_AUTH_SALT',  'e5xW^L-/~&</~rvA$VnXdd *}5TDP$Sz=nEycO0m;mRD3PCX/Z`Ybj1$%0+EX|#[' );
define( 'LOGGED_IN_SALT',    'p,7cSABDyFxzvZCUjLN-p lB[Z-w-fw]U6A_m0-xN@t^&njehrewt%2Mn<sbA+gz' );
define( 'NONCE_SALT',        '-O-~Dq)[XKyOU[kZfnfP>1jaAPOK)<5O}`osa/f=s+>@M*52C2o^F:k<v[[!61Ee' );
define( 'WP_CACHE_KEY_SALT', '@f},hbMWlGD7_u4|is7^@=&W<vCI*`kW&~5Gq+}=#U{jjL^CplR&ry<Ln4l#8u))' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
