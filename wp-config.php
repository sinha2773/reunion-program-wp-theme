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
define('DB_NAME', 'reunion_wp');

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
define('AUTH_KEY',         '&lA4*F:u/Qc8^9$vX&7a}Su.Ec%qyMKZA-F&|z8^G?9TWv~,3K!`9Omm}R]I`w80');
define('SECURE_AUTH_KEY',  'f6/gNiPYv$Ws]OR;$Q:hLln=^w%}; wHBWa-J^17>i^2M,JN38vqaM_d@zJZGm}5');
define('LOGGED_IN_KEY',    'mx[0$*1wL97CK_1Uk<c|3E D%~NW!tV;AZCd@b?!EFi#E5z0<Eo-K$w3IqYpHX7Q');
define('NONCE_KEY',        ';qC98crp0_8Hhb5XS g$3n&DL{./&0K#,eU1j*c^Q{<7/D66H3%{w{GVQ|Y|{@}-');
define('AUTH_SALT',        '+8K8yAbX=w(jR$/<nGt;*%|ax6JV.Al1%F)!XL9_|Y&FAnU.7oT?6Zv;eC!Jygj)');
define('SECURE_AUTH_SALT', 'dOg]0Y&lke+%^B8<::4$f.S>/GEAoSGOC8OsI%~rcPQ&[tgS*=yjG(DgH66~fE9A');
define('LOGGED_IN_SALT',   '/E:GNX35745`?:YiJ6kOaLrE%0L ][EcpTS@8dNI+s-.8IZLepYp2Z%FYz6i;(}M');
define('NONCE_SALT',       'G~1I<U*#]cx{Q:{F3| AM]uEY{n:Dgv`Lr+`3M;x{9u$QM[h^[M1m/>]^txlNhd+');

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
