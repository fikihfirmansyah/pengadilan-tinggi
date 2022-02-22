<?php
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
define( 'AUTH_KEY',         '3 NuOTOc*.VL2hk>U`ig`+v(izel3-7sJVAb(rtstebSfF@LV25ECF~Q9spAeO8V' );
define( 'SECURE_AUTH_KEY',  '1Vi=!W{!)8kA>*[+VdcO(Fs|)o/{.<79yD(__>9y%pu=JqVs@7Gy`rvKgtl5byZ~' );
define( 'LOGGED_IN_KEY',    '<W,6Jr4_Zp Ghx<Keb/|<<,at-%(eu[wjQYF,:TEC]PIak:xm@X$6>B7hjOu| -?' );
define( 'NONCE_KEY',        'OWJP7kJ>8,og_:Z5[7k!3hOyq]hj:pKc: 6{?ke3loY)17=uv&,&MaOf3Ee%68iT' );
define( 'AUTH_SALT',        '}O_Y.73axn$w%1gTxa47XT6?c-ev|^aWtcQ2B4Y_NR{X<x_GLCM1]-,`&&EG;]]p' );
define( 'SECURE_AUTH_SALT', 'Ji~g9eHQN/^r#. Rze:<*?W`y~DlhxR8rb 7:AD)8p=-TZZgV&:X[Wxt3]A,u/PJ' );
define( 'LOGGED_IN_SALT',   '>K2Ag1(wXgvwz{qG2cCK=uLjeG<k]!xH21qz}TsHwG5001&:iwYFK5(9)DBb)1K?' );
define( 'NONCE_SALT',       '{4+4Q%<3MNt]RdDH 7#pcP! :ShD-sq%adJkFm?V^Vl?yHh5dVUu,{Br~iy`sVX[' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
