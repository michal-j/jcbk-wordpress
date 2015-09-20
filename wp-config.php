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
define('DB_NAME', 'jcbk_one');

/** MySQL database username */
define('DB_USER', 'jcbk_one');

/** MySQL database password */
define('DB_PASSWORD', 'mike12');

/** MySQL hostname */
define('DB_HOST', 'jcbk.one.mysql');

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
define('AUTH_KEY',         'IMWtC2J^:Z+/w+R.K.YkK];B+1|jz1e1)E%@u#D?y$M@1.L87GE+}IaC%70CI%(2');
define('SECURE_AUTH_KEY',  'Hb=ZDrDc^;:|7ol2sfsX|2,}0RImi&vL+X7=BAuNXBd*C3b/,5b7UH:wHc^[hf5u');
define('LOGGED_IN_KEY',    '|%lcW.k=M}$?Bi 4-K4L<AqLCZI2OKPB#M:T(9 J|7 ;+AW.XUACv8,ear(?zKO;');
define('NONCE_KEY',        'BHp}T,a;QGwE< |HrH%@eS~ GBRk[=F|oMh|94FhfmD:w:jb=Tu~4Q6]8:I7jdE7');
define('AUTH_SALT',        'gbiBWZi.mrqf|xy%h=ZMT_bLuQ 7b*5W+m|wRi7fl]bC`F$|yBeB9(2nfd}H-Et7');
define('SECURE_AUTH_SALT', '{r%[r&Ne%=av,2A|J,WUWf@Hl:v+]9KT?zqJ_dHrsk|YXy#SUz+=N[JM|d6jhaH&');
define('LOGGED_IN_SALT',   ']q)]/M%kB)Jz0X]eAHWYmj,Kx6G+(<_s;m%OZHWi>Uv<Z^?RNQ$dI;JvAZkL3,/%');
define('NONCE_SALT',       '+oHL&2j~.?U`/~v<1E~-Ua3P9:<Shf1v(gkk,DM$I%F- _j%p6I3t4.Woy8_FT^l');

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
