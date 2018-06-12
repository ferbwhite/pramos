<?php
define('ALLOW_UNFILTERED_UPLOADS', true);
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
define('DB_NAME', 'dbpramos');

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
define('AUTH_KEY',         'O)FA8BWiELh9*} WFB-eogP~_GYOD/:qUL8<16O&u25be3G9,lfND)TTVbnkPKAy');
define('SECURE_AUTH_KEY',  'HhafKp_7+UTdb6L:a_T)neGZtCzZiSUM/0OR:/h{4zimPs^q`DA(DaMKxxPunD.R');
define('LOGGED_IN_KEY',    'O|tHa!Ci]cP|+S| R7iN:z:JaR-Q5$-O{}*`(A8]|rmWFJAejM9|3vWq9d_`5VwP');
define('NONCE_KEY',        'OUGZ9?4Nt7JR!v$wBjtLQX1Dy42JDrQC[j**7xUJ@NP ^jolh,G7V~E2hD<{0p7;');
define('AUTH_SALT',        '8i}8M-t2oMLaMQl~?[S$zd R>WnUx?60,:Qi_Y7=MyqXI*Y-N<.G%7Q?:v~5Ie2d');
define('SECURE_AUTH_SALT', '3C1-F6cL<WC`oJCI{b|[M1]^oT`}{k]?j$)DUH<0Bz`G1pk95<HgQMS?HG)cP(-.');
define('LOGGED_IN_SALT',   'mX>#d5&,^VKpjih.3<w#jAX|B,pnQDkn.,=F bJQX /Hejma&W+7zKm/W:#}}x,o');
define('NONCE_SALT',       'SpAz~v2GJG~xi%.?u&;47(x*x>%6piu}rz}PL`H#c<GbXs_qtxH/Y=vq#X[Y>vCn');

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
