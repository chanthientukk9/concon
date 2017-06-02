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
define('DB_NAME', 'ss_wp_hihi');

/** MySQL database username */
define('DB_USER', 'conahsda');

/** MySQL database password */
define('DB_PASSWORD', 'asfsgrweva');

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
define('AUTH_KEY',         '2U4nC9lBu]{=O-D8X/<v?2]_;-vznJW+C{@O6VJ%%}r;6/M3lL`aGlz&{sH-k>Ib');
define('SECURE_AUTH_KEY',  '3]B SpO[rexGL+xa;g#kf!a;.263~GW7^J0+99hkly{]wTnO0={4n{vd&R&lt0;%');
define('LOGGED_IN_KEY',    'nEMuH+(&if1/@A!R@xGN>u6)sWMpT[;tW/!Lr&DCS7:X1.c!JHV2[c/.F8QUtd,L');
define('NONCE_KEY',        '~8Gwq>FX}Yy9Llrp~[*tWt;QN}n#_ny?87rpSI@YK>$icds^6(k?qc|),dC+xWOq');
define('AUTH_SALT',        '7m)XXD jeY|0n`,`b94|ikj;0+FIN4OXEoKXUl3ND2yW%U=~_G29UfSZ(PhZ>OvV');
define('SECURE_AUTH_SALT', ';FddLVIgDu xu#)/K6gY=czwJ(C2gZ`1Ek~j>SA9*oB/w_sjjYx e~~^r3qhz?J0');
define('LOGGED_IN_SALT',   'SicI.3V64nje8>u;*s]-Yc8+-ad}]T@S@^,SVFP14<X@<##J?9;+N&e=jDvcYFB%');
define('NONCE_SALT',       '&v`Mj5Zz/xC9@Y_o$C$.T&R%II^J[{x!@1%tMd5X H/k^&sl|I.q8+%U A< #;E/');

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
