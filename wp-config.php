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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'v>{VLl`iEcD^_M-ge1vCY|7W&`DVj7_<F<eg@41y&fR/DcK2Al4Hv:N].+b#i6li' );
define( 'SECURE_AUTH_KEY',  'CIO~H%xU6T$|05-$(M8!hpG9,b/m5<?<STd)[lufJAneh]X6Nk&(Z]${!`w. {Kz' );
define( 'LOGGED_IN_KEY',    '{3BFB@[TT;aZJ9qo~?DVSB0@jcD7ucj ?/ A$| d)^<puqCIoZTwslO]J|QKP[T-' );
define( 'NONCE_KEY',        'ZJr_1NB^mM}1J`^}rGjPEx!)~:2:Jv{j7uh%$XM!<BV;vDV3q9~lfqn[JD+C;oq<' );
define( 'AUTH_SALT',        '-$?:xlFPGmR8wHR 0bbhM>li2KcuKXfr;[&Or{=qUvMSgoi9T6LWw>kc:&j/l(-B' );
define( 'SECURE_AUTH_SALT', 'UPIvdpjIAgCjy:|<VLlBv/,o&Y~mK<[OznB9XU{zS{aHw^pT>>sb!c,4t|>4E5YI' );
define( 'LOGGED_IN_SALT',   'm[ny]]V7Ui@#&lPE`>%KdZu_{2wKe6+mMq( =<_0 @opz}]cLzhn]>Jbow0oj_Ri' );
define( 'NONCE_SALT',       '8r^*n(w1 V/xiogV~(x((UGT-~m_i#9-/t$v8*@Xlv#y;fbG.J0Z0<zHInkOGa@$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
/*if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
/*}*/

//define( 'WP_HOME', 'https://khaleel.work' ); define( 'WP_SITEURL', 'https://khaleel.work' );

//define( 'WP_HOME', 'http://147.182.221.201' ); define( 'WP_SITEURL', 'http://147.182.221.201' );

//define('FORCE_SSL_ADMIN', true);
//if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  //  $_SERVER['HTTPS'] = 'on';
//}

$_SERVER['HTTPS'] = 'On';

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
