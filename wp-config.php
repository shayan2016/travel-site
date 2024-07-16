<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'AUTH_KEY',         '{Qz?}SZ0,8DL7}z|sq3x%TgEMFE||@[LC/UyWD4t:a1cH<_w_h?v`Vp)ffJC}(?z' );
define( 'SECURE_AUTH_KEY',  'je`dj(9:>tHp}Ws$F4!s>lt>?e^+eBW|bNL.gaNExZ9xSAmek_k@lxN%*xx/7yT3' );
define( 'LOGGED_IN_KEY',    '{bCrJnOPJb@&DvIo,Ly%|,ps.ci]T|unLgke`zt,dqHP=M7_LWh<6{fOPwmlF^j9' );
define( 'NONCE_KEY',        ']DS,KfYzG<fSt BcCz7ZDF8E)4&ra}`aN/!6XM`)%)5qEE(QKI(2Ei6P2lJ;R+aM' );
define( 'AUTH_SALT',        'weN7co0aG-Trg@nfh2q$^)a0O1A?@rqZGy0#CIlK+iEE%*>)dHx4ufo174}Kl97~' );
define( 'SECURE_AUTH_SALT', '%uH;t)6&AU(&IKJ3U6UjP2vEDl<889WK3Pb{!~#|2w.$!;`|+L>,sq94[_iV^1kt' );
define( 'LOGGED_IN_SALT',   'vQ=X+cmol6V.kU,2dqmZ*@<Eg~Vf<-WCwj!kWDCxf~~HqmyUBHd?pHJgEiSj{W5i' );
define( 'NONCE_SALT',       '4p17@IpRWZ`<~xw;+-1we;?1(9oB%W_F y&M<J2V*UC7z3Y`mNggtS7<_+B{g9i}' );

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
