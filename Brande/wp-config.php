<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'brande_new_up21ve2do' );

/** MySQL database username */
define( 'DB_USER', 'brande_addbnew' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vLoQ2N%6J=Dp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_CONTENT_URL', 'http://localhost/brande' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(0lELe)T`^DvqwEhiPrZjY-x.?7BTBMO%WKY7+w2n4?:ddt.L(Cj xa#Vb?k`hAs' );
define( 'SECURE_AUTH_KEY',  'IU}_SDA4V{RYd2l1o;Eoc$UJ7$ vXsG7oln.3gqHczEl;|u<~T7uU+9!? N/TP(J' );
define( 'LOGGED_IN_KEY',    'Td ,BSO<Qp$o97x?W7|P}H,W[hO;@Q}Afndq<s@qE{@XL1V<yNUxZXq]bD3mBp%z' );
define( 'NONCE_KEY',        '48Tq%Lf0Tg=4U*&6HZx7Rmn,#hL$R0d15J!OllD)7uvj!M,H_zjv8OB@<,p[%w/+' );
define( 'AUTH_SALT',        '~7w87JGZZl yd}HUD%j G|W{GLPJ27SLk|&2Fpa0:$*dH;#5EZ{ 2l~4knpBzkO%' );
define( 'SECURE_AUTH_SALT', 'R*nveNQ6^FpnSkiU&)Oy0$vCfne9=$Ch~7{cf,k9-.SK,WM>f1S~k/xYg9WuM_s4' );
define( 'LOGGED_IN_SALT',   'N==ca[VMKqW[uy=O,;v^2CidI~Mm~GUn!t?]2Pjbuu;tcTb(`53Br)yL]r:#??xT' );
define( 'NONCE_SALT',       'aq9,}!E_2mDzabm#iP/= rRXO$F!pnDN*!cbO2+._,!V&z-D#fqv:ZUUP8U<RWYP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bduae_';

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

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// define('WP_MEMORY_LIMIT', '256M');


