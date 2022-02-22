<?php
<<<<<<< HEAD
=======

>>>>>>> d6bf04bd68cbcd06fa6d38efe1d1b4b14d24c6e6
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
<<<<<<< HEAD
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
=======
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'password');

/** Database hostname */
define('DB_HOST', '127.0.0.1:3307');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
>>>>>>> d6bf04bd68cbcd06fa6d38efe1d1b4b14d24c6e6

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
<<<<<<< HEAD
define( 'AUTH_KEY',         'NOV@)m?st6UZ9sqH:ju(#[%GUB$D5x=8jz;SRtpNfNZ{Fpt]RB8&2h5{sp_.uyc{' );
define( 'SECURE_AUTH_KEY',  'ztgh,s^[vv?U]Ec.Me8.;F=Xp2OoURD.na,0*zC4#+He)o9&(95vyPo{%x!=Lv [' );
define( 'LOGGED_IN_KEY',    '+[GyIi8gkE.fJ+M!QT&P!LDCpHSv:I-W.yb~K 5^+4c of]~>t<q!N>9=WlB1YF6' );
define( 'NONCE_KEY',        'I?v9QA*/Y7XJOZItAk_>eW p!<0jo|15=_s~7L=joMq0I@]@>qp<LnYpi;Yla2,Y' );
define( 'AUTH_SALT',        'ABT8jPW1IL?neJ>]`a<>~&> e9BmF+[c:7mT(i(WO9s~M3RK?%oe?syq*MdKgKXI' );
define( 'SECURE_AUTH_SALT', '!fThd8q/E&|$NFn}fDbz<4[%B8P)Ihb;3$>>stCjGxfc#1v47afW#@SX!7Qz_@A4' );
define( 'LOGGED_IN_SALT',   'SO^5_ucCs*QLH,^p^7m6p/ejX3-9R=nxqhW^!h=5-@ grnz6(&3>q&|o)o1uxq9H' );
define( 'NONCE_SALT',       ']Kkz0afe(jKh`wbrDlW}l,G7}WEsgBVw.t1RK`<F`a;d*-SMJGPm.M<^ukC)&y~5' );
=======
define('AUTH_KEY',         '&0qJnpj;cXb|7S&I;BCd9{CWI1nHv_[{rKZ&sP7v+h()iSW|%t<7l>_Me-cO p|!');
define('SECURE_AUTH_KEY',  '<)!o!W|5;|oUh|@j6nUBj* (Ws==9_,^_MmoBz(xw&}V2AKL9XVCSWz>_=]8;tii');
define('LOGGED_IN_KEY',    'HXr+>R]kCdSO)k;1VzGE~@{I|kq*]<2DWU_p Ki)@!b65U48o8|TE~i}}0@yseO!');
define('NONCE_KEY',        'Y,;GZqM2_kb#d~LZJ{<X9F@5<tU]l`4pVMSOOK2q+0dp5Q0LiyafU2dN7Br3/NN@');
define('AUTH_SALT',        'gUF%^|Dwe6i-f@>txS%WTE`-7^a[Wg*cU4l.+%[9e$p1:!>wBy[ZOL5R4D69]_:w');
define('SECURE_AUTH_SALT', 'L}oJeOW=2X=Jj}A=g|sXH!x}dQ2eES{OokcQ+,L|A,6^LiBV|rMXG7m#M1NN38@u');
define('LOGGED_IN_SALT',   '+:(9iM`q|Y-z>*&E2f#afT25OP@803BIH|`8t.,+pi]1 I}f?_J)V1t+j1dhhz%M');
define('NONCE_SALT',       '}jR%+Zw,uRCmt|/IOCw5PcKPz?,}O.;iE_n&9v|*KS@pvJ|#v%LyjkhB#F6bBEGQ');
>>>>>>> d6bf04bd68cbcd06fa6d38efe1d1b4b14d24c6e6

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
<<<<<<< HEAD
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

=======
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');
>>>>>>> d6bf04bd68cbcd06fa6d38efe1d1b4b14d24c6e6


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
<<<<<<< HEAD
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
=======
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
>>>>>>> d6bf04bd68cbcd06fa6d38efe1d1b4b14d24c6e6
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
