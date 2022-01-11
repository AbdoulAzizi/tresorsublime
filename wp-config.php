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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4^ne!:ig>`xf:e0oG.(.pU}8V,^DA+6Z@0.o4QjB)d>Ydb_-MXD^l|2Pshd][mAH' );
define( 'SECURE_AUTH_KEY',  '0}sBaFh#%MB}`?6FMS?4@DUVYHMf/`c;!S!*y:jYAgTg>Bh]P#H$WsVn<Wk{*_U_' );
define( 'LOGGED_IN_KEY',    'G)S.cJ+]W0f[!wjjKiQ>I0t kh,6WyZiArbMv_^msr~/L05NC 7kotu[tR4Zi1dj' );
define( 'NONCE_KEY',        'jD usU1KD23%Fy^NdHs4FmD^P55kk,DqP=]ajz^i/o|#4 ~kh1t{7)KKIgH1&8<X' );
define( 'AUTH_SALT',        'E;}3WE=`Stj`z0{3OCvD~CQ<1K;,sF*AD>%}]bJ6*OCPrR`>^x e*a^:sO.>%Hla' );
define( 'SECURE_AUTH_SALT', '?`^Z0t0vht1}$P1k_]EQVkFPULluRp4VDzpoQxZ @A]v;.,wV>::QC>)]gfzm/T4' );
define( 'LOGGED_IN_SALT',   'a{fpug`uAS(RW.suszI&.4DTsc_2Trkah_Ifw9F),mkUI{^+Se#.CPtHKBwpb@;x' );
define( 'NONCE_SALT',       'bl6 c*lqQrD4_2ZKjpo:3|pX2;$~,@Ec<jd>@X8^%jKL<%J#+FC~_;Y@Xu6b}y6N' );

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
