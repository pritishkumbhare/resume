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
define( 'DB_NAME', 'resume_db' );

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
define( 'AUTH_KEY',         'j*8z)Qb+tku3UB_I .9SKIabNkWjQQ2Wx,oR0?eKstzOj]|[4CaZh/  R}5&F`g.' );
define( 'SECURE_AUTH_KEY',  ']H^WqZQvLsS+ncVi?fcySI9(3~*n>VCH>S;;&4ah2Z#|D&]Pt:.kb)RbWj +$8Dz' );
define( 'LOGGED_IN_KEY',    'zBrf(h0w,Lv*~m$h5ua7U2pzf:uqCLI0Z!n_bN6~pZP4DVB)VF[;^/|q$%0>?s(N' );
define( 'NONCE_KEY',        'k dIPV2$?u?aI;L(f0Sv$f8&Zw57|?AM!]uL[z~%0o#9<AQt/gtz]<7?1_A%wQ7 ' );
define( 'AUTH_SALT',        'T(/TEbsPdabGM?un$W|c#pnf!h%}@tdh/sWEud;tSI@Dx+#5)CSZTGC~:VNAuJgW' );
define( 'SECURE_AUTH_SALT', '@ :,f<s[q}.H$};Gvna1hT[dw_r$k55cD_EyCLrgp^v(ix6g0^d(OtM)6x[pp8em' );
define( 'LOGGED_IN_SALT',   'Nn[J3dt^cZw(RFZjR9w2on-pryHN)AuR)8Op8xFEsV%~b8,WP,#3)O94i;n~<M6B' );
define( 'NONCE_SALT',       '4. w5w,9C,wqxsa(SZ$H|R=2p+~D?_QAZ|.0vH9qBNIcO58+ctX4$:m~smxzYM>p' );

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
