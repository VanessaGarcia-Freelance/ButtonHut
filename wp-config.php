<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'buttonhut');

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
define('AUTH_KEY',         '_>W1;x)kf3`b:sunuyCu%|jt_--h*S.~eP%aY?PyQrL$7mk152W#,QA0]1E>fVxb');
define('SECURE_AUTH_KEY',  'W?[vIrF6/hCs2pxKe8bkwNO/L#+a>Ai>xBiY6_&?0zL,1a8N84w z97f|SYfT3WQ');
define('LOGGED_IN_KEY',    ']/DjD?lD!mvfxQpOl6#Ey4h>S<_LPkuu43S%ldq!+gM0}S15+VckgE;)rnNUwXqC');
define('NONCE_KEY',        '|+$K=q8N{+M_-&y0(RRkWgxVrkl[k8[/W4VWHD:8E=p8`oQLhQp1zDFFGXFK$!{M');
define('AUTH_SALT',        'QLq{w1KgWWrQD ueG;Q<lZ,.fz,0Md?u1>Y!,::kk4-@vxzD-+uRaO3B*z;M/zPC');
define('SECURE_AUTH_SALT', '$8N>[]= Du =0x8o^YdAse_v]P*A<CD%WU-O?`aZe|,;K+VX)TO|z1(/FE*_L<.<');
define('LOGGED_IN_SALT',   'quf,3_qE%qUpNXNrkDRDd,m3xP<o%>PU>Q3u(?-Q)$v755pP~#hVlr6cAw9.wOPv');
define('NONCE_SALT',       'GyRw%mt]Ml([eHM1A;|6o1N1SuofSVxpfK(+,[9Napv4.D7PWTswqrb3w{n.YlKe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bh_';

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
