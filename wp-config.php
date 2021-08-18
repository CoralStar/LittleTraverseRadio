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
define( 'AUTH_KEY',         'Sm~X*^:BZz}5Y+@@[[)60Ov=Ty-f7WVGH xc~><dV6m,n9>^6cvLf(G-fVtFo{Hl' );
define( 'SECURE_AUTH_KEY',  '..z?C{4PX?- cD,IKmpKMBu~802cR~@=(gM^sG>2[}T@Jv;Q-MA3pK~_Q;ZxgI9O' );
define( 'LOGGED_IN_KEY',    '$-xm(:N=M|~Zxv S~zV})*znts%kI3r@V|em!.*(*{:0]/QU_ZmZ_bM6ASSC!Mqr' );
define( 'NONCE_KEY',        '3yv*q+ eG@Nd|><KRc<JYskQmrkK&cr#F[VZ*We_4wXA]~u;:<7TcR|T_1yZ72T)' );
define( 'AUTH_SALT',        'zv$bG{uLp=|#1Jw6@VqTwh]lBt_~WpUiTRYA0n1d//4J)sk[d-%,u!NP%C;4(5N-' );
define( 'SECURE_AUTH_SALT', 'FN]zV-03@]dj}o,*#URG[s:X,@xa4#j2y$aj,0/r54,2Ee^p9-EZu}.|?he9P;<5' );
define( 'LOGGED_IN_SALT',   '9lPJNF]Fkb_QchYjZ4<H-8B`nJ4I:=BRgob!zVKV[-P?648jv$%kH`MjJG%|/2eC' );
define( 'NONCE_SALT',       'PCZ4wPe?+:L)ClN_?#6T0phACvcXY0D7VGCs:RMi3mMYT5QUNz$g|Q(?]1Y(l]AR' );

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
