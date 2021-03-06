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
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'sporkadmin');

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
define('AUTH_KEY',         '.O?eTsRkXW.[<?:`HRJ<z)+qLV/#UZd,<5?]!(AOFaW*^8+B%l~bwkEqi!@,Gs8o');
define('SECURE_AUTH_KEY',  'HU@Wv/037_-d|bgP0^-GbuCJfie)jliwEql3{vW],wS-}2?x=%3>#8_L W?i*&(j');
define('LOGGED_IN_KEY',    'N:Q,+?014JVgwGIf@,]-xAR{+PG[lhheW}%b|`ocEg]A0O4kr(9!SMkq(ToF79:&');
define('NONCE_KEY',        '[][|9=@A;h:=KtToWMK>5r@)Go|tw|%twZo6n+A9EGXzk:FLZ5f{lcKL]%L]`AV>');
define('AUTH_SALT',        '3i<iY<v>[@o$]l;;2CV9nsmZHL51G4[tl8TBG./Qo/_Xz7Ob8+Rki)*cuTzm f|J');
define('SECURE_AUTH_SALT', 'sL13OF#|aGw^%!{X.S4JAs+i$|`s:O|Y=RjW=wBXU&y]8DLjS|[,8&4jt (zH)xF');
define('LOGGED_IN_SALT',   '[-c=4UwR(6THw!k&(xD6%];tdO+N}>wc:A^b&8@#Kz&Cy[OsZ]yV6#CMCluVeA1S');
define('NONCE_SALT',       '.*Y>0,X #s@Rq:I[`Z7r`}0vXm~ ;=IzHKW:[HUdsTy2WIms`|iPV>3heYzh7+*t');

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
define('WPLANG', '');

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
