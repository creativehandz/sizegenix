<?php
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
//define( 'DB_NAME', 'sizegenix' );
define( 'DB_NAME', 'u151629516_sizegenix' );

/** MySQL database username */
//define( 'DB_USER', 'root' );
define( 'DB_USER', 'u151629516_sizegenix' );
/** MySQL database password */
//define( 'DB_PASSWORD', 'root' );
define( 'DB_PASSWORD', 'Chinki@123' );
/** MySQL hostname */
//define( 'DB_HOST', '127.0.0.1:3307' );
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
define( 'AUTH_KEY',         'Os M_hk`/s0jBv}ci>BSPxkn^Y!6[)aHol3VlU7iR*5TE5lUWELWP?1,Jke75zws' );
define( 'SECURE_AUTH_KEY',  '`sW>Ax25E4If$mXVyV|,nnXVa:ZXTg7)T/)?sxynl`N4<75t6i tU,(}EGNL^H&$' );
define( 'LOGGED_IN_KEY',    'q!Pat)9xuq-U%{mFOcbAMANNxcB{Jwp tAI-3,|K_iSs@<;E>^n](iA1BP<.0(<8' );
define( 'NONCE_KEY',        '#$#?eRFc,X%X!Iw4{N%[JXv&<?*7z6vGKTlJ^{-5b/aUSR?+5Ac^Ap[wA+Q?5opt' );
define( 'AUTH_SALT',        'M1_+-o9/L2FK`hVN:OZVh 8#]uS>@A;/Au8]:T#//^:u&I4oh2W9{0]ExaZ{hwEU' );
define( 'SECURE_AUTH_SALT', 'N:rei[P^,Q#-$9oloc3~=?`(&Nu=;7d)M{inB~3U}Lz)_nW+FA9R^?6.GFl(vRG|' );
define( 'LOGGED_IN_SALT',   'Wz0/PX5oHyMiPY$Yvpe=eL(&Lk}>M^*;$^8hT>,F8GkU.ymP3o>L<22U_w3{,wmJ' );
define( 'NONCE_SALT',       'xLh$7]Dh{R7g0%*i&4@Gr5b@,j<,Cse]IeG0D`=M5y<s.=YmSnJor~sjx$+e^Uo2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sg_';

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
