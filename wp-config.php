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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$rn&oZ0)rGquvtfl~o}Uz#RkiD=S}/Cmo@LXh88h3t1y?{]dY)+2%>y:<^|&h]KO');
define('SECURE_AUTH_KEY',  '7OBD/A~PU,czG3iy~`K`$IMxj.4g^is-0#lzxe^wdz`a# F8^Z796)vb4Pv}7klc');
define('LOGGED_IN_KEY',    'A~kQ?+hM]JRA:|+RRbGDMcdx >vSOVS^:D2H23kOEe{fpNb=hxh-J%4h5BD#_G{G');
define('NONCE_KEY',        'xXPeD={N -+c.9yQUb/9HWZg1mGYd,!%99ug@A&+TuaK7b$>tmw(4/yX3~.rq(&t');
define('AUTH_SALT',        'aNfW|*UysFo)K5>;BQaDgU;JyX+0_6*MDE(Yxpxce[(_DvkP*-4ca(=kJSsu7/YQ');
define('SECURE_AUTH_SALT', '.RCM+.~NWN?9K+9<C2MjYz/06 cF1*TI#VYa5F?K4Akf=LP;1$Nk&(-JcQ8ST(sT');
define('LOGGED_IN_SALT',   '@26XnpV,Aqu*Hs=q%^ti7}||J4|CQ^.y%}#Bx*BmRHRy+_RA?%bbIj<+ 6PWrqX2');
define('NONCE_SALT',       'vu2V9-mzcUXvbfSS/NLp}&6l*fT0Ca-jr]DwgWlV7?%NFVRd4&_E$(nbF-G?_[bQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'en');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
