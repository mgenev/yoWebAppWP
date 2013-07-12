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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

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
define('AUTH_KEY',         'dbt.,_p&*PjTT%!r=XZJ8j4UmS[+CeR1PO@kZ`qFYx(RM[086Mq@O@(kHE|+l=k3');
define('SECURE_AUTH_KEY',  '>?#}XW$de|8Ru9>jW)JLa,DvP)2/YaM.E,@Gmgp,U[6EtDEvXT0V,k3P;i3H6>Yl');
define('LOGGED_IN_KEY',    'N^$#|Y-PA00VP[eEqtdvg-) <Jz_</7PD#4cBDIv#lA7{+XR>+Z@rW|Gb0-aDWr-');
define('NONCE_KEY',        '-K9C:w2[q^hS$_twh[&k1W|n=ol5=?Y.YA$NAz-Z;YqfW~7DzjcDJ<ab>yv^WNWm');
define('AUTH_SALT',        '|xj|n&0E[rDp<D-~72b]d4XCUv;+2#(-B^9:unBE{Fo_Rkn>#Oa}U6->`dyFRPtz');
define('SECURE_AUTH_SALT', '!`ii@g$9E#n.Whxi_Z3F B|P]/M$K{^ vd@]~QcPoWq{3!9s{,]<4-T=+?QA^v|e');
define('LOGGED_IN_SALT',   '=g1tabeFM@*f7H=jacp}B_Ljz!:]]C,-9[wb|-vJaa0BQEG.pR5ns$*@4R4{D!<A');
define('NONCE_SALT',       'P=@@7ikfRpj]?2`;uFBQA11zt0P![2~w~130MtT=ZO!-{~=$iet&~F]oM~W%!Pn-');

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
