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
define('DB_NAME', 'copy_db');

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
define('AUTH_KEY',         'ic%U$DfnDA{ I~7@V2@#6)5>O#ZNEBNZVnfCX8sjye<In?L&~Xh2, U86{J^liox');
define('SECURE_AUTH_KEY',  'I!{G0)Y|Puz!>sG`Ge;5HCg~zk8Iof@gfh@<_< J_uK[3*W>U,9ZO5|m[PnH3S4U');
define('LOGGED_IN_KEY',    ';YE+c1E36o?bgGaA4]^Sv?l]6TsvqGb[?8n:EcOQ=w-T|t%}~CDrR|LYXxJBI4YF');
define('NONCE_KEY',        ')u}pkTCD[f_P}&Zp3+SVq>XNaYNr5 aHQ-_]|p6v$|*c`>Vk[zAk,T:c`i+m?r$D');
define('AUTH_SALT',        'J?QOB3|3%1clrFEmHdAPJ:PqO8IB-@LiTD#:reDzcI3njZq`P&*MF>^1`DR<-t8L');
define('SECURE_AUTH_SALT', 'C0+/e~e}J~~Gc.(V)Ld.|fdYN%Ht#5ebw)MC$!bV@as+z`nDE&O$bfI.{zn8RtYv');
define('LOGGED_IN_SALT',   'uw}%% +v-=0IB8,*|QXcDMHR.2_{ng |G!tK^1>~Lcf>Aj%m;IxpFH|j3=)ji2T0');
define('NONCE_SALT',       'qllz-(e-B=_ic~jbi}&bqBNWhs&QU*d-QJ@KCV]ZDsg<$`S$@TbdVnzstM{Gf6,e');

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
