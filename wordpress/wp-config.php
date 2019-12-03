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
define( 'DB_NAME', 'direceye_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'direceye_wordp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Alvaedison' );

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
define( 'AUTH_KEY',         'YV{iG-rgm*0E:WMo6|_o0Z7JI}(8qHVt>3{bb:H9)j!zxK=%6@rpFtk}Y?ei>?^O' );
define( 'SECURE_AUTH_KEY',  '##[(ME<`CrbcO5{-7abuh/qR Gy6T*A|E7,L!|,^Qo.99GPQC-{fU`vdIG^.:rM,' );
define( 'LOGGED_IN_KEY',    '1({1ePkJ;3&)PbuEAC(*c^Y=2=6Ya`T[R/`e!I]vQ#Cu_EIYDhGe:. k7H7+XVo;' );
define( 'NONCE_KEY',        'T!m?I _h:UHK@VMk]4.fV:~mtv]o&Z-_6iW(h.hu2^;ISw=>.7YU/SG%t%xDeHmC' );
define( 'AUTH_SALT',        'sV:}YPB.P-uAS.t2oR1 bkRPPI:D,d*~R;3c@5O~s6cPJ&>_Wrd/&esY0ifjVmj8' );
define( 'SECURE_AUTH_SALT', '(2z`}H*PI?#9 $S29J3[qmKSj4E%jgdv:siOGV1LX]?bp>uD2A-4[au{/!tV~vbQ' );
define( 'LOGGED_IN_SALT',   'J,qD<Yb]-3S=O/F_(,2?CLb<eyV%3eAn|AJcRM)!1?p~Kv[GN=Z,BHaNr50xHvLB' );
define( 'NONCE_SALT',       'B$*kgG@DFj5&d,]pZ20Zz*Mi&q~=^JqI)EoYSna+`lV5;]{ka[=W@l}e{N2EG.KM' );

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
