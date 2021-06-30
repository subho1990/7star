<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', '7star' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pU;V|uALhn6,s+((3y~!v{thwp7UcdiVlU,Yc&3]~zZuyLO4te}n<WYM&>K|)ft%' );
define( 'SECURE_AUTH_KEY',  'HF%bcF{=e3NoQCPzZ[igQwXPorYCy2;fh!{nRF ^i2H0h=G,kh1#MK,yjgd7`]k[' );
define( 'LOGGED_IN_KEY',    '($lipBx#_OCmPQ> L5zV%Q;+0 sJ9PWc6AUN )f|twI}r!v5~Lv_?#/fK*9m ~t)' );
define( 'NONCE_KEY',        'v?qnK[X8Gf9huo2kn*G.lzt~M[BXL}/HXQxA2xu,i:O}x-,3+=TC>L1w?{53a-$6' );
define( 'AUTH_SALT',        '3az _s61=%f2=N/LjN%vP!QW_|8pM`ZEHA)0hn|[[&sZTC1dOb_hfdK$Z16D0AM-' );
define( 'SECURE_AUTH_SALT', 'vEn}_2x6EUW^gWMGxh?Jq<YE9m-W&w_Q.uL45{(nATWro@,f?I!vg9<f(nhS(=<Q' );
define( 'LOGGED_IN_SALT',   '.mCM-qt=y<&uSZ]UoFB72LwR7K8:#KN>B0wtL~]0*pX~H|PGnmO?lN2?0BUE8pc)' );
define( 'NONCE_SALT',       '|M@Mn&59Ohk-Ewk>5X2x;8D?3}q$CVGXtqa[&%gU5Zb<Y[h_kYE/Wu`b/1$,u |C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp7star_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
