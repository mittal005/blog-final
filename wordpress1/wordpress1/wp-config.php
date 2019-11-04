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
define('DB_NAME', 'mittal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~Hk{qDac$52w[RJt*q$G];5(PhAzg@gHY&KiS}mb}-:}.ijrZrOs3z5gJqzvI^Gc');
define('SECURE_AUTH_KEY',  '4CttrwQL$zV$p059#])Hs4aW^At}bnOIs7r#;-;02 $$a9NX:Y,`u^$yY9{`mILz');
define('LOGGED_IN_KEY',    'bfX=$Qt5b}lY?wX2OSmB}|%*D3W;y!0Fa`lxg*cB{gTJSi?%R6-YQWtCS*7#3O8m');
define('NONCE_KEY',        'hmLHhuE:HTGe;#W)nz+BMN9|~n&qsfGA<Pd2ywu(iH917mHZ>#c@%Is+)I^=y(oz');
define('AUTH_SALT',        'S:*(S{8xsI<fgbO&u;isTjc4)T4ii$-Ec:,}()ftY^*j~3k<Ma|=O9%[7gW6#9_l');
define('SECURE_AUTH_SALT', '8f{xCcrVZ_(naPEc-u>6`lodTc~h1eY1o)L1`~Y},6FVVD[@uZ>wLd#+n}E~]eNA');
define('LOGGED_IN_SALT',   '@L]w&y$:txaro1tnt>$= Af*9OG?71m|xRY@+S(v%J*e @_GM@v1W)ve0+pJjOIB');
define('NONCE_SALT',       '#zRCdjw4P9 X,~0<kLHccRW$;R.Nu~9#EEW}i&3:G,8W|h*Hk^~{==iAH~ZE{.4;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
