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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'Tl$U);Qg51kR~dy`[_RG,X#Dy1malY;X$0XGQzXc/~a^v_Ef2feMV@v1m#58u<C?' );
define( 'SECURE_AUTH_KEY',  'AT}g:XA/n<5@K(A.-MvV/rt@X=jS|,]Rm`6R [f|[W|c!O@1/-V6Dw( Ad5>?Yh?' );
define( 'LOGGED_IN_KEY',    'Yf%MmKW#W)[$!sCjkjS0[(;T*E7K_NVl#g0LMGOX&,LW:`P-*4@qjobM[ic?iT(^' );
define( 'NONCE_KEY',        'u{=ROv[Px9/[~vsk;lJA</ho){C cf/Vt_?nHk W:_rK1 k9.`h)}lFH<3nsnJJ7' );
define( 'AUTH_SALT',        'nSgk!`w^6pJ.K|Nk)`Wx{kho5v~o%9wC5fdrDq]#_t5!@5&JlmfkD+s|qN)zg#9V' );
define( 'SECURE_AUTH_SALT', 'LC JKNzzbYlMZ62K&Uj3}?|Zh0m*~j5 _R8^)NF)LGdza4mljAd];*/vbIzqO! $' );
define( 'LOGGED_IN_SALT',   'GMWa~,4/N^C[L%Rwsd=x]3R@,?r0&w5v5>dssT_Iwa9j2oJ_!b*r`^>+:bzCM||U' );
define( 'NONCE_SALT',       'B_{Qa()[pq4@ J,&Pb;S1 ,}5d^7f(`3ta/b=.~{2Cx*v B;QS?-pUo@8vv/|%!F' );

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
