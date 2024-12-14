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
define( 'DB_NAME', 'navor' );

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
define( 'AUTH_KEY',         'k&Viswh:i34m;GfD{&hRJYQdoR7Jq7WExf)|>G2/[pB@Q7-fES.F+<D:BML-E,je' );
define( 'SECURE_AUTH_KEY',  'RFw2#P5!JRhk`[vKKMX|.LBBY|_S51R0JA)NHq/xPe^g-G$/8WL,6LA02/gYcB(N' );
define( 'LOGGED_IN_KEY',    ';??hi~WOkc+m%-=p=jN{8#y8;<)ZQ_vFzsCO;D=ux+oj`Q&#h>>6aq5V#LwQP?:0' );
define( 'NONCE_KEY',        'RM*6R{{Gp4Y020 mWR3Y!Nq/x<M{Rc?dc]PJxxyI6AhBHLf43Eq86k#<qrN#K-@q' );
define( 'AUTH_SALT',        'Ed,S>3Qj}FlEVyv_D^ r]-6%jV],N@]TX*1$l>`j}tZ$&0cbr)Y/<P9QyqvR,%b?' );
define( 'SECURE_AUTH_SALT', 'B,P-Fs1&F113uj7[Sy{Np1`v=TiUyi=HVXp/RWdTzNLcp3h:]UP@b(vD4^r{z)E2' );
define( 'LOGGED_IN_SALT',   ':{Wf$sW:?N/wPwoI_qH c.(&}o.H_Mc@Da2-9qkgNQH#qj!FuXT6K7fT3e-*$vsN' );
define( 'NONCE_SALT',       'Q5L>O>X0`g!dgWVt*]*mnN%<;27;aTF-U-a{KH_^#E#z-gg&7abbWRmlcWGq~nX8' );

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
