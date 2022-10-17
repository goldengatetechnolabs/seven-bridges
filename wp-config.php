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
define( 'DB_NAME', 'seven_bridges' );

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
define( 'AUTH_KEY',         ']{# ,AjH]`INM`1!nr2A+3B}UmV<>yJ#w|KFX)nopZC$q tCS:/v@%i#:Kj|S9r<' );
define( 'SECURE_AUTH_KEY',  'F@~$44jjWs/V89j:qfSC<IZ,de4F-C>T)C;`!|r_]#O;np:0_.(S)C|kZp,&/E^Y' );
define( 'LOGGED_IN_KEY',    'U&wwm8ar!kSgzexd2oJ6+P[MKyv^vT@y++4kvJd@B0QQUB=@?!j=B>RJU`8PpIzI' );
define( 'NONCE_KEY',        '}Lh[]W_Y<k|XF-r~OB$?pLFL-:5;/7C4jkMY1)|BZ ,p#)@ZQ,:Ttrura@i5$ bV' );
define( 'AUTH_SALT',        '8l,3;#)jY*J}v7spM7fGp`sR[sr(aq`on08O_BXCX5:wH)DuvarS{yiJVk{(M+8t' );
define( 'SECURE_AUTH_SALT', '.$n- R kJ:eTEW{G#l#)C<JaCj3$XmyD1Bps~XZ{1>/G?Hhx<RFKdF84_WA(:;[@' );
define( 'LOGGED_IN_SALT',   '`*L`g 3$Uv|{b(%5P?O3${M.o/KduW*w3V*^+%J@S-~.oFRl&Gd9^b/(a3~~H~_W' );
define( 'NONCE_SALT',       'tIxTzi8]>1mT10Pi]3/},Q%a^*X*u#~,?uA+Yg4<oF-)`|K[ulx#3]=#)H}]W<b]' );

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
