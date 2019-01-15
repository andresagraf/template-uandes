<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "bd_uandes_ms");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "qwerty");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         'xa!p8x&|+le%r-7--[01E>IR+.$O:vEm/:9<4aaTZ}5$G&I?Z4a$8x+gq{~j<W@S');
define('SECURE_AUTH_KEY',  'S%:Pfb:dL[;vK{(a#c?zXr[N~&*-pgYkd&1j>yi;qBGtI8G+$&;B9`fT*|X=Ql+Y');
define('LOGGED_IN_KEY',    'a9caW+ :t|K(ZY--K3-u]@(Yns4F8Ltyg.-Jo/)t;-j]cR8v6K^/b48%n-$UkXwE');
define('NONCE_KEY',        'FFLdqy8!D`(2Y4|U)z7$q-:EV%r(<?Mk>`Xtoi-TPm,k.vcHx.kpP{ac[sj*]YD8');
define('AUTH_SALT',        '!b?Bw^&-?b(Bt+I3$N8F)39K<}A|&x^TgN||2C(D#|D%=w#(SunTOm?AxQwd??z,');
define('SECURE_AUTH_SALT', 'XU-8Y]0%^).&IkPDFx= ioM^=5h{H}~.TYa`]``i:yY(TYb!%L1n[`^S6($#9|Kr');
define('LOGGED_IN_SALT',   'd{luwmKzSuK+Tqlygxm-ezVZ:r4Y3W<+D$WvrM*hG/L/dKk@m:L(GX@+cT>Dg!U-');
define('NONCE_SALT',       '+(CP:0#{t*A=[r-s$C8@Lw+3IOZYj:0v9Gh{]b5lLz+SWF2Y{E-dj2rs%mC?b.-#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_fiat_';

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
