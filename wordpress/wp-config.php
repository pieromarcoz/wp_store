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
define( 'AUTH_KEY',         '.0}1,TUtwIMs+@=QNXku;*<qm<`k=B`<f]qu&g{yp$zCHF4EB-$wP >AdG.akT92' );
define( 'SECURE_AUTH_KEY',  '@ThbA@3ak@s/H/.fyoy&boXlNCW(!Rs+qLL|o*Rj)E[O6xOcvU3@MPb<n.oUU)6a' );
define( 'LOGGED_IN_KEY',    'M@#RHK#d3:MUo1~k!jtZ!~,wO{zUi4woe:z.spiJB2,gf6zAH_M%PG+4i.|mRk16' );
define( 'NONCE_KEY',        'K@)H|)7q}w(zYjR5GX,jwuP~ZKl&! +qRoI UR78P;=I~GlhYIIvHrfX3^Q{47MC' );
define( 'AUTH_SALT',        '_EnOmwd@*,2CH37T%#}/-IW)vwzR]wSH*pvNlxm=H?2j3r#vz:8VAAaDYzms&yci' );
define( 'SECURE_AUTH_SALT', ']QH!t6V8~x!U1F LWF4z qM!rLT#x+?m ;p$^|1RF~S>d`Lk8qmjQs)}~*07r=>P' );
define( 'LOGGED_IN_SALT',   'o7wn>J|te1q7,E4&6I##rn/*3v1^YQL4vF >fE@wI{(w.,GM)-sZpjVU j|EWJf^' );
define( 'NONCE_SALT',       'R.,vt1_u{OG<^g4,4H0b6yfLt3rsI_ e7N>*$FL}l31:]<;!rHQ-Ei55*Js#!24=' );

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
