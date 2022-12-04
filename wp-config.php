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
define( 'DB_NAME', 'bibleinterpretation' );

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
define( 'AUTH_KEY',         '|,UFwfC1HOsfULRzh^iT~$cf,CKt%-wGou6+EwpR}TOdC`@_F;T+Mf|mS9S*JX!H' );
define( 'SECURE_AUTH_KEY',  '&vqo;{$9YF(c2Tg1bp>qh1.K8[{:BmBv[;wA]#@<B=P ayI^!UCUiO&l7k<w3R6w' );
define( 'LOGGED_IN_KEY',    '@t:,EiJ/R{rh9x!]5j~?R{t>b:pH}@wR6){PR(<ga*6Wu&z vWYPD;dE7zd^4|Aa' );
define( 'NONCE_KEY',        'N1u*@aIJ(dsSRBA8i,MK~s~yD#t$hRAq4aUz{+O}-Z>F;#&h<gPX]`#_6%1VuN!W' );
define( 'AUTH_SALT',        '|;g?2~t8E{(6m11q5_irM[pD=zsnV[d=&p_9B2KqI~/5]Kzsw#ZPa*B3YLZI2RQZ' );
define( 'SECURE_AUTH_SALT', ':?[d l=Th..MERTFq7{dQakLKsdi:]b*QEt00p9.&5qqC-_+1v<f%h?eeZj(4W6D' );
define( 'LOGGED_IN_SALT',   '<%O|?hh|}5+rkXIy$&}!QB+<:?_^Q(sIE.=|#:WM<`^JJJLA]?2l?jQ/Fep[WqmA' );
define( 'NONCE_SALT',       'yu8|0KX0$A 55dg)l7;4x3vW2V!6&M<ef2.HAyjE eC;&b7W$gXP~{vKI!H&ebw8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bi_';

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
