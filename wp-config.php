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
define('DB_NAME', 'qdm723415600_db');

/** MySQL database username */
define('DB_USER', 'qdm723415600');

/** MySQL database password */
define('DB_PASSWORD', 'JackieZhai19980420');

/** MySQL hostname */
define('DB_HOST', 'qdm723415600.my3w.com');

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
define('AUTH_KEY',         'RGFi1=$?-A}5o0s%!/>Xt6.vNBQqrG?~2V&>yNr={#{;gp0,e:x9ql46H%=h.Y_y');
define('SECURE_AUTH_KEY',  'UAS&d8Q?NkQ.x}iv*Ah<:PNd:is~u&yC`.()j+*D:XeFIRk_UM9p+<yidm*oCy--');
define('LOGGED_IN_KEY',    '+dS)%Gj1>d=3F@HZw>:%`z@7s^4d5Nm>3&eEd~->*#h`W(g!u(eP7Hs]@Z#b*tVW');
define('NONCE_KEY',        '^V6G;p$, ZpBJwDuM6;$rGimnN&lv#?(IF*9C$oGy!6&.M&hbfkRJGTQ)c.gl-,9');
define('AUTH_SALT',        'wsFMR]gBa5++fU/mM{7NyHvuEz@3c/nPPyLq/OOw5[*naf%K/G3s.p>NxhJzh<L*');
define('SECURE_AUTH_SALT', 'uE1%8yZ]}_cu?I#~B3{^0x9`j=LAC_9%h6`m;j!eR,VJ6gYA@qyv?#LyM)Mk;ui!');
define('LOGGED_IN_SALT',   'q)CR-PoM;11mXnGDV<rF{w^@bK%jr0<ESMO?1j8T5XKZ_@Q&Gl#H&SN{]_=G:LR=');
define('NONCE_SALT',       'TS+~]!I4q`EmLsG,h^Ys]!+BBWYuajtwTg}&M*iJN~}@j.nV;J}5#j{kiM$(9IOa');

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
