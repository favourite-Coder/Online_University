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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '0J^.KkacRmV ]{:.1`]NG578#hPMfg+N3T}1yZ2.$Xw;905r>YeeJT-l`{*xJ_~2' );
define( 'SECURE_AUTH_KEY',   'apUdXH*<(Yw&&Z2/S |t/7AU]:{!E |O Y6)A*pjO74M-?am.FR:Di-YDN$JbU=U' );
define( 'LOGGED_IN_KEY',     '%#7trIQKc-yU!l&S*;R|JJl.+]k-AN)L_ZH9Lon3chGj|Nu02/yNR9mR/m4qG<}&' );
define( 'NONCE_KEY',         '6+!.;)Pt^AU.>OI,$(p^y}#:i66xq|9jGZz+ZK*|R)4F`HHTTX6i=F|S+12-yyl?' );
define( 'AUTH_SALT',         'zDmo+-w%jGG,F6*tF}y|X<8))Gk6;?AE^=%`jV$7|cg/(N1vb`,G4MiIH5x3Tkqj' );
define( 'SECURE_AUTH_SALT',  'P,3aZ-I/V#_bUBy96Kg,rufo;}~s~hoIYt9M!f|;B)PS(yJkmd;y`VR)v(I_7vO6' );
define( 'LOGGED_IN_SALT',    'DuK#*bO=edCW[i[-LjU([ATl:`a}:Hzm7$2,_laX+gAq/OC~y34qLlH!p|(YXi=F' );
define( 'NONCE_SALT',        'go$%lfBvUQnY^<L[b+{yAa}ZR~`u.^MB49HcsUJnaz3n0{Y]Iwu0HH=]ZD>C[|=:' );
define( 'WP_CACHE_KEY_SALT', '#<Z;.p,C>_YG%rb!8AQ8fV:bY<QfI}t:?LtO+(%h<=!4F$@M$9fUPZ/E4#2e=bH)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
