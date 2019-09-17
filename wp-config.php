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
define( 'DB_NAME', 'wptheme' );

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
define( 'AUTH_KEY',         '[IrCX)r3VXT.-8{iwh7F&hi~5l^QELP}#~V[dUd/#NPYO@M, evBL,{yOHu*LG%C' );
define( 'SECURE_AUTH_KEY',  'i-ZK!.h=oojHIR2M@]vmQ2$ehV{P67_InjRc=#wUp$@E=d7vM*O>`h17Q=Av0f-+' );
define( 'LOGGED_IN_KEY',    'gBOyO #nJMEifxRprHA%vI#$VR>l:M;5#Re+rv_h6e#LQ(n> 4Fo)lzo52(yr?qu' );
define( 'NONCE_KEY',        ']`f;Rx)2#5ebxDt4 kJL.^tZ++DY550u2jvl1/eYp`aZljrVV7FCbPId0_Rf+&Gm' );
define( 'AUTH_SALT',        '.KUS?7]/34OC#^4VsPxwocg#8u@W:O@Hk6@|=Z(PWh,:z}XkdDp0*:;22(vNBcfa' );
define( 'SECURE_AUTH_SALT', '|SWI.1==Q/P/:bBYJ@}3ape]o+6_V+TD=tq&sM}n8Z7Y<}V!4_qR+px6]>L5$/M%' );
define( 'LOGGED_IN_SALT',   'bVr]:^xd8:0T*hD7P7`K/gK#(B)Z{lWF2n8+Blt%3VK8gjRR465xi?La[?*Jel^h' );
define( 'NONCE_SALT',       'Ac^K}!8khr!EO.%>Q_#):rN5QJ]`)}s{^OmBIes<7LIa@~pn5|q{1Sls3Pxra(ei' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
