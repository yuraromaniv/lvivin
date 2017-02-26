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
define('DB_NAME', 'lvivin');

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
define('AUTH_KEY',         '4O:/!W:#fCQZM+5rCFRT2e8PLCkC6[xO](%?^Fvq4$~e^B+U.bamKhpR!16^lsO9');
define('SECURE_AUTH_KEY',  'VvhLdYxhmDB]^Ed2JMa<jJ2dTM+.1UF3&wf0xlf~5DHtT;M4pM8n(4=<I8sZt$gx');
define('LOGGED_IN_KEY',    'ke#@VAd2DW5D;~`vRaT7Uv)Au}m:(DaR#AV|}>$m,akfxYMHJ@(fG^83p@WtaU?Z');
define('NONCE_KEY',        'D9J;-x<Uq*l6jvg!pv;dG#]rVF~{R5ow]5H)={*OYA2&=9?/1:XVM-~INh6pNvWG');
define('AUTH_SALT',        'B7,mwo#FXP[8L;(0|c?9B%x/$14h=_--$UZaRW=w1%^U>P5v|Vl?Z:8y0+/@)ryK');
define('SECURE_AUTH_SALT', 'Nj%ByC{FeAnNZy$R@?u]y<}A3^d!,IvgpiX.#X}TT V!fI8ow 5k3`iiY@v]*:ou');
define('LOGGED_IN_SALT',   'N,|e;]|dV(V>t|u`W|?Q!yqFL`eoV}Tz{bb0e[sJf[Ashp2uA6G*PZQ^{.%B,+5S');
define('NONCE_SALT',       'A.m[ o%@kj|U]*TCo_p%bd 0$i{-;PUk!,0[ds%p)J6Ld<jx%}pocs:JRBh9*Yz[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lv_';

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
