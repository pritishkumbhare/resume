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
define( 'AUTH_KEY',         'Ds,.t(NL!agF};]Hs]rXDw3JQcBA}3k`+vIN+b:rnwl[J}S_+zI6K~;f%- 7JT-5' );
define( 'SECURE_AUTH_KEY',  '}6(}jh{0Goww}t<t$wk!QuAFRu*DrmMdrrMb{mU.!>Mi ]Dhiwt;0+JXx_5Q0&(/' );
define( 'LOGGED_IN_KEY',    'XT k/ecMVGm]u5.Aq44k&SFtYO_HMNe%gKA~8mA*cQ{!PK4KH{*c+*|8<#`1?J%(' );
define( 'NONCE_KEY',        'iTUG6Xt|~!5eh9SaA, wRNX@CVgkUV7w]hxR8r&r-I3hggV1 zXfF#5g6cr=Jb>K' );
define( 'AUTH_SALT',        'Fa<0cyV{|bH<LGMorw6ebS:nyDI:oiE.w62d3<Q)Qq{(DX25}uAJk4XUFZp&|6a:' );
define( 'SECURE_AUTH_SALT', 'p`.FK5l!HxLwO/9u0Kxl2nS)<znu2qwwmI&vtGCt69Ax7**CM/EwU;-eIB`8^~{=' );
define( 'LOGGED_IN_SALT',   '46%T8Z>oe_5j9Bni|g#R4C;oW2ddsENbzC)|k.i$ PbM}M`os(y!dO*v/-_~^!x7' );
define( 'NONCE_SALT',       'EqequN1em[_S{D2wyB,nyk 7][Zopp048<DWBAH;3)2/_0sA/nwKM&XD$q|Zb KS' );

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
