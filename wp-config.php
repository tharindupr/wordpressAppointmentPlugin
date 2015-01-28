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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '>xr0lM&/ikVj?qzAXiw&*r0/-5t7{lG-C+#>.rbai69z3s=-;DJ0([_Zs*F`;@jO');
define('SECURE_AUTH_KEY',  'cS_f]yX^FQx`c((_B7L?1l|`R>d[BZ1L@yAo@B,@b6S>Ugv8R(APDt;ujJ$d/`vy');
define('LOGGED_IN_KEY',    '@0DB-G.-*(G%`bpZ?k_}Cq,/mU>@_mvcwEkTi}m2}wF?WD=9@_-!fGV1G>qJ[L9k');
define('NONCE_KEY',        '8}KTVAi@}VIK0~=,<5))_An7W(wq<6I=v<2cEc=v`loa=I}pCKVsAToJF:fK;RTl');
define('AUTH_SALT',        ',nI2|;Z8c+:qjZTvX6#$8JtO2}iTdrRs5VV9(&wz?#X_5HHWsn&(DqE&9j]s|&UJ');
define('SECURE_AUTH_SALT', '[Gf&aQvS*l@ -,pHX7B=d18tB$lQdtNf#*hS*:#MiV=2ez;?ri)SeieXOM,$ W+!');
define('LOGGED_IN_SALT',   'l-BPbgxK)d(/!C;VZ4Ns|3B:9-r% }2HOo]k!;R`mZykIF1Dc&V7 $5pZ@bG[-gf');
define('NONCE_SALT',       'K!i9|7[j [mzo>>+xnc;sL,}/W,RnuxE)n@5Ik$bQcmRXR,OB;m_:j|%N^+;zEkY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
