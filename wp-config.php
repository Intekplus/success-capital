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

/** REMOTE DEV DB **/
define('DB_NAME', 'intekplus_success');
define('DB_USER', 'intekplus_success');
define('DB_PASSWORD', 'KM.7S[T&aE&I');
define('DB_HOST', 'intekplus.app');

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
define('AUTH_KEY',         ':d1bk@g.r9.U|>hT-:f5b}DmqE`}GS?-lT_8|Dq6Y?_XTm;Xpm,VF9`)IC##M#$W');
define('SECURE_AUTH_KEY',  '+cSic25Ju9%f}cguEa$^E*l+@9m1YaX64EGDd?D=oU[aR`X~m9#6[A.u$HUq^7Q0');
define('LOGGED_IN_KEY',    'q6T0ElYXW~eNLn<h@]uxXCbLp5OfS)5(hwRL -6pj}Zg];rNnL^ASy:COCapIa^o');
define('NONCE_KEY',        'zK#6{DU]8-W+zlT b`VXk|VY(25;$V)bb#LW 7EUZ~].B6J[K2Y|VmA7L.2oY^qk');
define('AUTH_SALT',        'YP@-e3/[j,+]gd=,eB`C45B]B@ (wQ4SZ@AD|QE4AHWt=..s};S@8[4&Bv(VI*?[');
define('SECURE_AUTH_SALT', 'je0?q MsC?McmB|:F[F?2+Q1%BJ)>C5TxG-l`/6)6p$]:uBlUn2C_f~&PtE{Z0N=');
define('LOGGED_IN_SALT',   '[sui~96I]>c?!k`in4J@7|t[#R@voJ6y^9(mflu/9Bi&`s HH~Qnxh86qm!;|[y(');
define('NONCE_SALT',       'v3j@s`=LS/l8Xo3:B 2!=>Zd_*EUE@agj1jK[Nus[_p%Y?sPV#}s,Res&uOWJ5f{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpm5_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
