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
define( 'DB_NAME', 'testsitedb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pword' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ']nont@Jm6moOSw~8,0Z:B&*]dh:(~0R>3HatKkxf^7_O%9gj<fhw?MV CmeRNpL0' );
define( 'SECURE_AUTH_KEY',  ')TpD4b;,#q4VG;fM bFIo~cc!&xrm4@!IVEb_VIV|KkQey<y%-P-Nb4kY|{*-t)5' );
define( 'LOGGED_IN_KEY',    '}}v21^PP|g;]}*!1s8--cPRq`@-c=I{+Rn#DGbM,b1Va(FYrs7^slhwY 2j]vFNY' );
define( 'NONCE_KEY',        '|T4UM;R(BA6J}rcgeGU%d&Si?#[{yXM__q_r$jJF`V8dr=W]k 5+i)W3YhXc,x2a' );
define( 'AUTH_SALT',        '79]pNlt1:K:Dx(r/*Ab6Vje)]29Dlv6,Tz-oij(1D`J4Z@;Y1QL8b5^@uZ-;.Zn8' );
define( 'SECURE_AUTH_SALT', '}O(C-/#kl|Yf)NDi%SF_Tk._NDA)[HnU946s])d}-?j_^R=92L=)sMQ[50<J{FUO' );
define( 'LOGGED_IN_SALT',   'X L~N/[Riz&Ah,H Al8yd35cyGIKo !]1pb|?e0spVsT;=.-[g5Jc:A]PqD(OR5O' );
define( 'NONCE_SALT',       'q;2kB tZ`b&vC5X#$Lt$s[cr$?O[2eh=^>zfiZ]rteDQ038Hn3K6$4TO=MGl#L&0' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
