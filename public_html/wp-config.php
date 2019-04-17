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
define('WP_MEMORY_LIMIT', '64M');
// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u644481109_uzeha' );

/** MySQL database username */
define( 'DB_USER', 'u644481109_uhyde' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eSuvaSupaX' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '4PMMRQ Q)F[c^Tl@X?hibLB4$%!Bel{!?PqO08d[qf:^*|%CDgnwfg3}n<y;/0Nj' );
define( 'SECURE_AUTH_KEY',   ' XQj5jKzV?j](6nUl~6e.<isFGsStkoVS%OT|-u!w_+DK~A6Z)iWGHn|I:KhzG{w' );
define( 'LOGGED_IN_KEY',     'NI6k._J[-}Ls7d{4LU,VA[u2pa)ST^Co0d>f!* yqRuuS>Z6D~bgPvgYbP4J7XI3' );
define( 'NONCE_KEY',         'JirTKGM4p*b=Un6|wsK#WZ<-01~g9Em}x%5;2o3:DC~|B]y},qg(/y&1x&!Ik2v:' );
define( 'AUTH_SALT',         '70yQY6#~PK|Bx!;Cv].i(a~ECpDKocaQO 8m=:N~)K,YC[MhdPKUL =,-263cIv^' );
define( 'SECURE_AUTH_SALT',  '-!9Zp/3:# Xu[ewIh9mzw|nS>#+=zR:.RB:)rL_*3K]fHLWP^[e7s.OkB*DjpfL<' );
define( 'LOGGED_IN_SALT',    '>RQx2EA~v@n}8G[&z }O#fy@WpBD#y0[9BW|`9:s47e559Yg374*/h{m*q,oBVa,' );
define( 'NONCE_SALT',        'lf[)mo&CoKtval.0_N7jmgR]/b1*8Y,X^ lzs%KU4[^`SxY>o3|H%#heVuYvuI3=' );
define( 'WP_CACHE_KEY_SALT', '4g{Y&gLe<O#LHbg5eH7lbF#aRbm6jz.2lxOYPubc!jSPqx[^||c%ggHoLPQXvAo[' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
