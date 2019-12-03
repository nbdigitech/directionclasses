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
define( 'DB_NAME', 'direceye_wordpressTut' );

/** MySQL database username */
define( 'DB_USER', 'direceye_wordpre' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpressUser' );

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
define( 'AUTH_KEY',         '8dEcgDbUQ!,a(Lhg=qZj 1H$O$l*ky$k9#$m]&Ilw~+vc/g,%Jc@#mZzSp1jdIv~' );
define( 'SECURE_AUTH_KEY',  '~Lg{-B/&})KUI~?zr:Q9d]v*H,S%=:4@7LDe7[3|O/NpKe/X<oW>l?6 w=7}tH>/' );
define( 'LOGGED_IN_KEY',    'q8w>L:kQncqFM8BUH0si(;PGg+mp5B+Dp}rn;e!}nw&y%/;.fRM~|C!=bnvGg&!O' );
define( 'NONCE_KEY',        'Yx{(jO6.vf7K:gI0qh1n/CfF)x_IYpb[fT+2X],grPv2]X2@7_e6k8uG+(m$$pwb' );
define( 'AUTH_SALT',        '3*c:Tc6GTtxT+!}<*[pbI$9H`V^.RR?|LSuWv8{=5hX7IET92X]g#oV6^Py`LD3f' );
define( 'SECURE_AUTH_SALT', 'IE%6ApFku`8La#H[25w+Yo^PvZe].CF6Cw4m%scN]r[FW~A!_3_MZbg/yDh&Hsby' );
define( 'LOGGED_IN_SALT',   '2UyUR/uu_DG5pPrg,gN.s;eB1x]2a=Hj[C&D=8>W]Ny|.kiZlva_[de$rG&{CBOB' );
define( 'NONCE_SALT',       '`:=0+8jA5Z8e/m9yF^tK4CB|_b/1SLClt,a7#ABvjq;|ywdwsPOvs1Wx02;#@H*Q' );

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
