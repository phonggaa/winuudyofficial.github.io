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
define( 'DB_NAME', 'db_demowordpress' );

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
define( 'AUTH_KEY',         't7s3X6~-[9C s5j}{v#~.$GgXS.>YexYsOw>v Ka>IKs4wNr%@7Bb}}Ula$h4sbm' );
define( 'SECURE_AUTH_KEY',  '>FvuRg<CAHBAQ>vi+fSX.b2zeVz_fji2)*P60QH@L E]d`qZT)pTpSbe{s*@nt??' );
define( 'LOGGED_IN_KEY',    '[O!O{f?qvo,qvCcw#*,8NSR_];s?p5<v$J(5N4G6hISOi-SEAQ2$J,TM](Yj&P#v' );
define( 'NONCE_KEY',        ':e {lGaQs=.k)1D0ki5KaG4W_bcbstPamGD</Pf8?mI#`}QyYJ;:bZt6wPjH0)]^' );
define( 'AUTH_SALT',        'cY[jWc;@edWd(ulR,HG0bPp-TBPhG?@3YsS|js6C*Ja$jG@vX!GwzP/W2sKG/Mi~' );
define( 'SECURE_AUTH_SALT', 'o4?q|^`iMnE,@%s5vLz`qtNEG6{t!j}Kh)I%;vE2XY4fy,f=pSq$bsRMnE45y_&9' );
define( 'LOGGED_IN_SALT',   'k)K_AC*tZ:RJfMstp%iutN*P-7WEgKWN4JxuWc_%,v{M8y)kp4<WxndtnAROE1EV' );
define( 'NONCE_SALT',       'yVHJ:JMBE0&9](YiArwVAe-G!{gpWarbi};q^9$*{Lfp!O~-6XPWGIb=rOh1iYe^' );

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
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
