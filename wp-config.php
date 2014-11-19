<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'supple');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'O|DAr|!*bI Q:2&JI7&kPrr*_ gpxujfy.N)eJ%<Jf|&urx4dB38N(C6a pH` S:');
define('SECURE_AUTH_KEY',  'r R4JpJBu?nF7]LF5zEIm:.D/aKXnDZ7|HatEvoZ0TqDW3u.?oNNcVVpX*6p^Q2<');
define('LOGGED_IN_KEY',    'C3L[!h70uK*E=<<1+{]PY[&7JjPM-bW}uACOuv&VPk<8u%fc9KAv?r#f-+}s^bV*');
define('NONCE_KEY',        '<b+Dpx^@4Am!L=9,e+)S1?(wrt<S<s}Bm)_5OgC+O?$s[Bo^+v#2Cr:!N7+Im8&U');
define('AUTH_SALT',        'Zv,~VKlPk&2bD);o`0:t:[F4<2Zp+@g4uMdBdU|+f14fk#*z|Tq%%lUDIaqo{u=_');
define('SECURE_AUTH_SALT', '+d3.~|<VTmJ^b7DqIv-|_`(0VWX1 8^Log?/)K4<{bGr`{T%82So%L|Bi2EFk-J+');
define('LOGGED_IN_SALT',   '1=;h+<`;viHZv|1L99L!t@JhhU4Coi;kTcBc12psul_UEy^|>J@$+>N$*]gkM=qA');
define('NONCE_SALT',       '=d.^rNZ|Zg_$roC`9&#pgJ5Hwh<;C(dku(}i65Uu2!z-Nh-8aPn,NjA+V}8w Z<[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sup_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
