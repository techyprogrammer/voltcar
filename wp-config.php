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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'voltcar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'aOK1??* 0U;w5A1-l@#N</7WK7y)Y!o8+$^@>Iux{axXAk?xR2I=OWpU[4(Q:K{1' );
define( 'SECURE_AUTH_KEY',  '=TP`dn-TnmYduflJ8A~MQ<M_17$yKNBA#YPm7#6f^I} j%hsngt c&G5EcP *sLr' );
define( 'LOGGED_IN_KEY',    'g25$e~T3;6*v-OKl7O#CJ.(Sl_H3mQkHl%<5y!%w$<v10C9!Hq>FVy|t0-g^n,}!' );
define( 'NONCE_KEY',        'pbR, Wig3#<|l-=,[r)#y9WI>u58^;[y}vVMzI[{6KXHdhlL`%g7}]Uz-wbqqdn]' );
define( 'AUTH_SALT',        'mHJ)i 7#Af|$[,Z$rJ}hgUc;3e)rzU)DL3R2Nx jjYoadlP[9=?J(%%xvs#REe~$' );
define( 'SECURE_AUTH_SALT', '(T+3<bGUE#RrXTXw9aLTPc{dOL~u_EXkd6AflXL@Ba`14Q%{_.s&]kROxB.^d(K<' );
define( 'LOGGED_IN_SALT',   'VTGe`.KFv_5h8+kNmF@jzX5|jWZU1Ge87g]TtsS[_=}u]%a)HTx>8N.KZ<.5PRBi' );
define( 'NONCE_SALT',       '^eUCA,kLz#u|9HI2#2Pu )4`zZLJ[KL[=RhcL3X{:IlvE9zh]0d9p=u-iq@Zb!Er' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
