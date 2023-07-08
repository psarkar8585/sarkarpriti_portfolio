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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&fl#xEfW|d&@xg0?%Ki[&&|f)wvNqUlz99ja$$z%Uo)$,&:0YstO#MICNOoU3)~|' );
define( 'SECURE_AUTH_KEY',  'B,e%jxKh!7bELp6K#YU!K2Dr7sU6+33BmM~3NbhJ OBq)h=-.dKHj?BdlNo7y+LV' );
define( 'LOGGED_IN_KEY',    '>qFmqzy=pgatMpFw[}{*}S{+BDsS<7)%iK3g3`5x?&.cFT95gd/1D-]dN^k}DkJ9' );
define( 'NONCE_KEY',        'VL_2QlN{<c%o~Q;(C[2?VyF%#6@(<ovdm_|}4cAsO3xF*N6X-uca2X$(pp-ZIJ4-' );
define( 'AUTH_SALT',        'S%uZ/sk0bHvuhoB%BrDUt:fU8?C(.+(BlM;y(IH{o.sgeH]LZoq+8&y?J_dRIG_^' );
define( 'SECURE_AUTH_SALT', '?!R:k#Z#_e-qgF0^tFPg%fJBety]q=XnPo?ky9Lh?8@d[Hu<ojLZFy5xM;2(b+sP' );
define( 'LOGGED_IN_SALT',   '0oa+~Jl&}M>o~a8tmG6emPf-TGi;<|%^xgJx<]vN;L--R4&ME0HrRZiB(8]DSXf=' );
define( 'NONCE_SALT',       '.O]im`_xr[)%$uCYQK|>zYA2%oYvL]W,+GA<=S~bQ&&EKo{c{Lj(PPU;xT N#OKo' );

/**#@-*/

/**
 * WordPress database table prefix.
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
