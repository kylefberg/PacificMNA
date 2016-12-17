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
define('DB_NAME', 'mysql');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Do$Uf~$VuV)rw6-TP_uZL4lO(Opg`BY6^FB#Gc^B%c3ftG~Ym^Jz0CIF?(+Rk0Sp');
define('SECURE_AUTH_KEY',  'b!#|hV:H^L!~=D0VbDqH^S`m3uIQJ)O-GG6bSehSuEdI47J=;r+JO^{&(w*tY&;@');
define('LOGGED_IN_KEY',    '9N-:+Ab2*d}dAxA [ySPd/0QWtG(MC,|3QQtH+v$opO, glt~kU}6W91VR;aSk(.');
define('NONCE_KEY',        '6?{Oiw=Qiei=Po]@E=WbD>b_T,vCNixcAckkY CR99@zUt{y9+>XFc{sFcnqo[5a');
define('AUTH_SALT',        'M4n%^FnCT,YTce.wsF*KO<J<]7(fI:yvGuaz;vZDTwo<XOskC$cExi`;[Q1A5irF');
define('SECURE_AUTH_SALT', 'tSZHl^qZQN`r~*0tXjb#c7s[MjA)}2I=MFJJuDe>H6nS|J+vL>YZ!42w]vPgefKz');
define('LOGGED_IN_SALT',   '.-nkvBj`u `&<Qo.M2sEWo}-L?(tyXmGKnC]Hin~9{/n>M+{/O,EA[|;vC!OVTzO');
define('NONCE_SALT',       'O,hO4q@[ }]=/7:g@s&xZgeXJ+{pZ -{e4Md&|7gQVMT||UW<@M8:}w-,Zml,NJ>');

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
