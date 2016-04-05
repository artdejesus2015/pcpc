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
define('DB_NAME', 'pcpc_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'R 76pb$P|Xi+4iPLDI5f8+><b,-5J=+h2dS7m%oj-ur%2B#C6#.-.~6|+1[T(Zt^');
define('SECURE_AUTH_KEY',  '-.%TkV:K#[pos(/2$<| (hQw.a2@X#Ig41howi~A~~ZurpDBj7}g=O~bF@A{|&{N');
define('LOGGED_IN_KEY',    '62&*;;j3`M8Fms|F+-Zg@.]hhDuyMO+:[!u^PFZ 8(3.|$^aY#KuY{|~Sq:/{s%H');
define('NONCE_KEY',        'gYNSCu~1!*H!|KdR]~|v9R2LH9YW_{#Z2JQyl:56nBhRH7B|$TudGj~x4*jz50.@');
define('AUTH_SALT',        'u 9B)R$pcoS8+7D[$+iF#e hQXRd7$,#6|j~`{^r(//><un`<#}<ql*X+uO+W-P5');
define('SECURE_AUTH_SALT', '~yb)hy|J+lCA/L}dl?9Q@Nr~N>7#C[Aq}1|%m1!k*M*Nkb1QIs+kpV+BT?9vKpEk');
define('LOGGED_IN_SALT',   '+_NzKCj0Sv|fq?>b#g>C@e-k+Rbu]*]l{v]=,Od|; &vv`WX50;4KW=G- -- =Os');
define('NONCE_SALT',       ',irH1|Js#0,|Kmss8hyGy##Us}&G!qw@,l-9K$EV}g{mM+kaBT|:zL9^=>+k1<Q7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pcpc_';

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
