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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'j(>LE`*HQ{@,B4eK; O&A3${sNu0WQ.{:xO_5.49?3m*&~Rs+/Vhnek%9d~7UH^p' );
define( 'SECURE_AUTH_KEY',  't[@4<yi8jHq+9eN_AY]8$.tWw)o?xK/#h+|M:zc*m#~b7@nRw#p-jdS+4PI{3h$ ' );
define( 'LOGGED_IN_KEY',    '8cy@XYw9$d~PRg^<$vz3KY$F^8r9/xm%9;R0Ud!1If>WI4_$&_)}89Jju-9lnBif' );
define( 'NONCE_KEY',        'Ik!qkxOo8(uqjc%Ax@@}1-$df&+86-Yt}+bJo[a<Up2=DQv#(1>NZ4PhQ8UR3NZS' );
define( 'AUTH_SALT',        'Z{*^$J?~HUk:M{#rbu?DVHq%, 4B@9)&- VSy<7Y|WnrIhiKNdNlw ^OxP<)>VNU' );
define( 'SECURE_AUTH_SALT', 'QfJ8@`/^^FHE`U,6%%:Kjb{o=<br*##do7zwP-?r3s_R}fK<nub>jNxr$MzDnD(I' );
define( 'LOGGED_IN_SALT',   'y-;Y_t?9tiI}&xenw@q*?x`3d,BC1L:5FJU5bBxPCdVF,*0pV=U2WTO{gb2+s]^{' );
define( 'NONCE_SALT',       '^%pM+p)V+.a(C8fO7tlTN(Y:AB/*GT/AwlRpt>K#c;p+995wM{^f|IGk5Z4jcs$3' );

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
