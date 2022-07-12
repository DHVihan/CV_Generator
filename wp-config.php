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
define( 'DB_NAME', 'new_v' );

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
define( 'AUTH_KEY',         'F.@KqII4x!uL#n#m@We;:sDT6bGe$D6ZAXvXOB3cbZ4H7u<^Iek|0/fpg=;xnB_-' );
define( 'SECURE_AUTH_KEY',  'qdmnyrArum 3@_^]{Lr@E@6U4BhXK9a VAKDa)N3;:sMyDEkjmtxw>rshRA^,I0C' );
define( 'LOGGED_IN_KEY',    '[gb-].zt%=4L7|eoZU{|<%&EHIE0nL8UlE*SK6:3,17%[6#_icUP(zdXaz7ngs_t' );
define( 'NONCE_KEY',        ':=!nS&q#:3Z 5ozv-pWgjU@rY;kI~&1JnQ0Q#)Xc (;dJFR8XlDg)X;h6,vJbZ*n' );
define( 'AUTH_SALT',        'nBvTa15[O4oMTG{:5`QVsFY{}eNNg0{*SI q ux7#N#-;}B2I,S;]BoIvy-^QEH`' );
define( 'SECURE_AUTH_SALT', '-X`mLQwskr5!HcR4^t<AzJQ*9c5d-SuZig2  FQ]eAswv3qN4e)K&dWIL~(8;PxZ' );
define( 'LOGGED_IN_SALT',   'Y8Q4u`dD%5g`}D UYVlJ$)=[-tsqHu?9>mD8$cXQMjKGJu+GQ;i&h,]<Z`v):/vC' );
define( 'NONCE_SALT',       'J50w>s<tILTRA@u3QNh3B&MQB)GR)j_r2Upzb`bj{v3uefQH0OM_Gji<=Udx+l<0' );

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
