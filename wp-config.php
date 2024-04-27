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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '*_L3,?_v{V:k8KazEYPoqY~66z,<R|O)%pkAU8D$1/,fRS3M +Qc~1&<>uB:Aw-U' );
define( 'SECURE_AUTH_KEY',  '>uey_{DiFsl~%h4~OkD #L.FoR^@k+ 2dqf>IY4YlZg>J;sM[|sm)(i5wb#1g~Y2' );
define( 'LOGGED_IN_KEY',    'x6:>Y.GA?~U G;RO-o?!.?dZIA34[tsR|&E[(!T~=}Zt.9]Oa- JSz,^UC-ABvB9' );
define( 'NONCE_KEY',        'FbY)B/9ej,-,p7=?/0o8NvP+%3_tN~$;V(~^(F<[Ed2EKD-f%iaN@6j_B8.Z3ut3' );
define( 'AUTH_SALT',        'tCYHzP,CVZ[g&1e[t~]gw7$4Z,F]0cNOqPh@0bMG2w1xL[8Iy8lgLk,y.-Wdb;np' );
define( 'SECURE_AUTH_SALT', ',_5tMp%K!.*`asN)HYC[Bfcv~JnWU YM@CZ@imwkQn!>i30s5jKYdjiUg_HZs`1R' );
define( 'LOGGED_IN_SALT',   'y-@GETX)1|4/Eqc2D_JF+~Zi3KGO:bTV##C|(9qp)<eA$<tQN68Iwl}889koARp:' );
define( 'NONCE_SALT',       'RzVQPEE`$j{vNb9*VYy0:?!@oM-$)Ah[AY*?w~z6f.$cB@R2(-$ NBB^3L$`~TP1' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
