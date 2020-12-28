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
define( 'DB_NAME', 'beautifulteeth' );

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
define( 'AUTH_KEY',         ')y]weJcQJ4v1R&Og `/V|lM)6+5z/rOLjIoQ,ZzxI-+-0=l/^0kHx-8EVm=g`8s+' );
define( 'SECURE_AUTH_KEY',  'K%&5;)t.O-VA#Yd5Z4O3 }a(y31B^i;3J<5w-<G^x+S3gRV#E.hr>Oqe)ey#~j,$' );
define( 'LOGGED_IN_KEY',    'ts?<fEDn7Tz?eec0E=NR{u8iSQF,;uSS#tSiM[~iH|g8`r#$NeG^,vT<TZH1EWbt' );
define( 'NONCE_KEY',        'p<2v:YkZYH#zLbI5OhRR72(JuY>@7*VvOSBgDI>3Jxh1hIyIx5!uief<mgFwptLb' );
define( 'AUTH_SALT',        'anV~p{`&<Dt7<!c~?t=aSQAW6:0.Msp.!O{WAixo m_xe-1M,R]GVq)jiSHZp4CT' );
define( 'SECURE_AUTH_SALT', 'k4u{hwG_v?%D!|2=OmuxtDp4iP&^k-V_K(Sl36?nV4SX^Z!w]Nwjjj_<|`Gk)Rn_' );
define( 'LOGGED_IN_SALT',   '$VC50hRa6<O5-Fv~k;W T/ix(6f$hVrfeZ9X$G5[{HY]+WvF>8-D{VqN6A:_*K 1' );
define( 'NONCE_SALT',       '-$b#S6wZ-A@C)3R.0;VEq-Zg`ve/XX}W<zdbJ`NnH>$sF~cc/pmNuO9QD=I#/KG0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
