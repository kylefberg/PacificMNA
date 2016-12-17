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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'o&a3;jO%7oTJC`&N]=& n+Ad39mvGdImn5{ ))`N>jlDC0p3lv0x`19SWj.x6q)x');
define('SECURE_AUTH_KEY',  'y~uj>JhGBPWfA1C<sVgmx1tc6!jXKw3de{E<Ikn7s4WVHc`7^vH9]XY,0HWq?N`R');
define('LOGGED_IN_KEY',    'S44nx~Is8[1- +MTz>|/Ky2yVa&GLMU{6I]Hf{jYK4BS2ikBs{~Dh+r4yk5;Ysdx');
define('NONCE_KEY',        'Zy,L*%.BMQu#A?*v?uTtf7bKllqH1U72p5#x/(<f^Kr3Bzg:r)_2/:>pny`BHeF}');
define('AUTH_SALT',        '<3{,v,Mhc^DJ!S]*Wt8IV5} ]4Q~>L_HnWj|Z8#W=OZ*Hmv;n8kU8N Sgl$,>Dm#');
define('SECURE_AUTH_SALT', '@h_Tsag$QzgUlz|xdv#BQz&klS:lJ/kQH~m(y/cK{R.TYo%Exy|X1@deCBah.Cr$');
define('LOGGED_IN_SALT',   '-D~6EKl]mhwT2NJ~.TU{<P 3zKMp]RtrX0NFstN8)<R ,6=!L|(0kn26-wmk~:%l');
define('NONCE_SALT',       '#rhWuXW*mx(Xh;q{b_OE(.BQAQfIhu:Pm-$o&!#@9Y`q_qM)jB}(Y69BHt *P~5U');

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
