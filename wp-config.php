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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         ')En&*b)G?:LL*<~K=u*yH2nU=4{K@49:^i--t+)Ms]sqOh0(Q5NWhe:.#6>Y{7=X' );
define( 'SECURE_AUTH_KEY',  '}XAbN j5^-$o$p|bN?2Uo/hEO 8(t4DmbXrZ@#nAcOlMY:[438!#&|DMsJ;{lgb7' );
define( 'LOGGED_IN_KEY',    'Ef}8n(;GkxU7jI,8Im]nCcDVrs+TqU{[NR,|F[SLwQcOINv}PVVp8n/ho8gu^|8d' );
define( 'NONCE_KEY',        'zCZQ:#a3bfPya.R2YuH>}+BqDa7N6xMj5xLc >lGWQ(/<)FrxAq463I]d<l~YI%$' );
define( 'AUTH_SALT',        '*{r@%mYBLX0{e8[oEL:O^!CmL|3/`bCA@0rc$v)uI_U<$8Vvlz}sONaF|CZj+Y0?' );
define( 'SECURE_AUTH_SALT', '$_Y`xjNk1bjM|^xuqRV/$;D75*p0VbcW4f`ZW+u63z#/~CvV#ubxWiOZ5~UNx-L+' );
define( 'LOGGED_IN_SALT',   'DG%D+Y3k]C3:Y<J4Cf4{$cm>U6_kj3- ^~eq!RQ3^IUBMRi<G$1$+=|.DtJuiLtj' );
define( 'NONCE_SALT',       '><U1l0l7@Fgu2=d3}YPH>a~ab<ub3@M9%d3#Q)hge/;)Hvh`_HcL<KH)rE72xk7m' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_test';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
