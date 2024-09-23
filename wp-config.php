<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'drprod' );

/** Database username */
define( 'DB_USER', 'dradmin' );

/** Database password */
define( 'DB_PASSWORD', 'dradmin123' );

/** Database hostname */
define( 'DB_HOST', 'drprod.cngusuasi7sp.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '6[{{`CH y ,Y5F?;=HVneq|$=gSPrN!JkC.]]c27dNoGR$Vp[rwjB{S_1}U!}wZ*' );
define( 'SECURE_AUTH_KEY',  '|.CJ:PGB$;HW,$Jycl&nR4]^c|%bzQm7KvraggFfqNZcao1U:|MZWZ<e{cZv?keq' );
define( 'LOGGED_IN_KEY',    'Dz=!?0m;[7Y/+0>b;cP1O|u$zgMJ_<{O+)URCV9[6O>Pl/8fA2zc?5w$qNmUS)%0' );
define( 'NONCE_KEY',        'sM/nN/^5Q!$gllLOH!d]Ln:lhrTCo~Z7,!-D4%R8&yWnE{l*PV3Qwsf%&^WVyu02' );
define( 'AUTH_SALT',        'Pfd.Ao 0x8v6`2?ub)k%2Q/|* vZ6fB}px44Z,%$?7U)<1i(!lOc%qsh~+7FwG|C' );
define( 'SECURE_AUTH_SALT', 'S0$$fcgRxg~PzGFB;xFiMZO6BZcO2%~z5Ud=.~3S)u8eZ6HkbXH>9gv>2%K32Ty&' );
define( 'LOGGED_IN_SALT',   'Xto7gAM,PZZOJ*x2eV%sRT17LWG$gHjI-/!h<0e?p@w,*ZdH>rOW!~)tn[;xB_ap' );
define( 'NONCE_SALT',       '~<#wXM`$BPl0dieX3B<yT@(Uz,VbvM_z(d%(H6:rey5WTi,+|)<ac;Laq4VB:SNb' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

