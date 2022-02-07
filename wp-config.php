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
define( 'DB_NAME', 'sosgame' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'T}2c<(xMawiMg_|1M$YFGTDXi0[PZwT-W#P{dW9@IXe9=QdsOVF%$Z}?pa>E;8>?' );
define( 'SECURE_AUTH_KEY',  'TV$^4ACP<bA/R1a@r~lW/KJ~=&J5F3@Ba8wYd`H1f0iYgf3;kbr-$ea*_:)>-5bY' );
define( 'LOGGED_IN_KEY',    '>G4AG2KX1L((80G?2M/(D3*pKSh[p2D|x6rH7>R_q~JK^S,?sDT@@r0D=y:,)p9_' );
define( 'NONCE_KEY',        'h>|cA^aBE.rKNlZZRNOvSdHGV*$u1F/a@9~DCH>l14i{iz|Z,.P~$H`j_=-JrP_q' );
define( 'AUTH_SALT',        'n Y;9Tz}C@|}QtErt!{P.3NT!nJGkL&a.QFq7z[&w(u{tWx44i@+rH_fFv2zVv~7' );
define( 'SECURE_AUTH_SALT', '*TH!rZmnEkgM;}*$X&!ympj>8#r0w{758|)AtfXvwmx~`^o<5G1R6QYl$?EWR=T7' );
define( 'LOGGED_IN_SALT',   'Jec}VR`,K,]eA]=s*]GAc-QUU,I4Q-]$qunvh$6;^za=i/J><SO,_L,5/.G:,_`;' );
define( 'NONCE_SALT',       'w_S)3n8MC6(VLp2ARAgY aZ$]R]0%Yo6T(7jYLq_a9pNaa{:|CsP`(rv8k$R#9{Z' );

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
