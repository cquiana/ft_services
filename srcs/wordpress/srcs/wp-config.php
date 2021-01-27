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
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb-svc:3306' );

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
define( 'AUTH_KEY',         'K;5GJZ=)|){xtU?kswrv8xa#1wQHOly;jc!:_j<9yKP@z@kuJR>0kN8s~Y4;3mgH' );
define( 'SECURE_AUTH_KEY',  '8S?KcqK^[?1KvSSxE:5in5z4ue#j,d#jgr|tSM4>sbg9R=`uG9wGR-F 2G[4#L8l' );
define( 'LOGGED_IN_KEY',    'q(qXK f{LsaetTPnG~I0%*Pa58]ExyKf?WTi]}){s9~^s(IU|Lt}EG~#pmWO.=*L' );
define( 'NONCE_KEY',        ')y! aF%|xV0}WG/r3?<HYrj  }2Pi ZLRvU[D9n5gX+#Rp:{MwboOTfSl#(k67|e' );
define( 'AUTH_SALT',        '=S_dik/ bDx)#FU+kC7O7S`|VM@RA<;>{>&OZA4C5KP&:b[P#A?j{pY3@<~IJ$#V' );
define( 'SECURE_AUTH_SALT', 'r<dWZ.uGf3W=eg{]?zW &`qxT4oOF@PO,^XW*Gxl|MBdxK#F[yzL}vp^fX|j]1Or' );
define( 'LOGGED_IN_SALT',   '{bx0&N>`3pTn0mombODD=b^{hZqi>ue0I$i!`AWwCR9[$ds?:2sHDIP(#${ui)VX' );
define( 'NONCE_SALT',       'b/E__B:qStojt)T|-L&%gj%bg{`E!0nPMYZ]7L(UTTb|7 /=9`aaZcK>fd*i3ajk' );

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

define( 'CONCATENATE_SCRIPTS', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
