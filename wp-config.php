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
define( 'AUTH_KEY',         'EC$s^FFwvdUA1{u5Ny%[zmK.#%G`cXh00XFfa:Plx3Z^!c1;uYXhfwJ1(`bK|iK[' );
define( 'SECURE_AUTH_KEY',  'S?/_Tuc>|2RMXu+M-jJv*lbro`GcQDb-!hxnV^y>yX9^hC_?j=2io%/|`YMR#K)W' );
define( 'LOGGED_IN_KEY',    '%Z]E{xma1OE2`~C*pH4VFLP1qUl8gIP*-(M|_Q)0&29m9,8]y2$5SGQ Jj:y,YcZ' );
define( 'NONCE_KEY',        'c|[ #KMe~_>k5-?t!R)<}Sn,iq:_}&O%Q!9i<LW$R&S5f^<fzSI%_?CR2B0=61PU' );
define( 'AUTH_SALT',        'v3AN}LwYaqT{=XI|j^#&M Oe{x;Nx0@RKbheUGvAF[2iiozj~y`*E oPT>U02hge' );
define( 'SECURE_AUTH_SALT', 'P?tb>z(Q Dkc] >uFr` Elk;yBL+cTOn,rC~$cp&?]@7`F/EZo-4zGbGd~Q.OI{Y' );
define( 'LOGGED_IN_SALT',   'C#Z=yX/[b>`Cb#C!)lqM*0C.guSyCz2(&*aoICQ3It5--2CJs4@Pswx{ ~?1 Du9' );
define( 'NONCE_SALT',       'bixdCL!A>4J>={REKk]6z;s&/C-+H35[TF3HgdUL:_G4TWz+08.+Yy-YQ+EG9W`0' );

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
