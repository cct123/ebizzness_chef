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
/**
define('WP_HOME','ebizzness-267444212.us-east-2.elb.amazonaws.com');
define('WP_SITEURL','ebizzness-267444212.us-east-2.elb.amazonaws.com');
*/

define( 'AS3CF_SETTINGS', serialize( array(
    'provider' => 'aws',
    'access-key-id' => 'AKIA6KXKDFAUMMBBOC36',
    'secret-access-key' => 'jhjKWQHIKEG6S+mXxhH47i+JwsrgUtmfDSdoSzCq',
) ) );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ebizzness' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin12#$' );

/** MySQL hostname */
define( 'DB_HOST', 'ebizzness.clpgoqvatfrs.us-east-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'ts&L{ef, BDpHU;1o 5QbSpg&N$?,<W5Pl~NAW},;)u|5N&L`E5e1jkFN$a+2z_a' );
define( 'SECURE_AUTH_KEY',  '{is4M?B)i.H6fZ4Ebs]jP_1[$`a 56zrp3#<q.A 0?Meo@R=6bGrR.$B_{Kjjb~@' );
define( 'LOGGED_IN_KEY',    'N#dm<p5x.-(4$ESO9#N@Y/HvPi4CYZpG?G|H:vU2;2A%$A55X2cAU>i$t~pIBAJz' );
define( 'NONCE_KEY',        '9g?~<1v*{>ggB<[6Q$5:;,}RMMxu,lrS`FS/CCF(4vGCdZ5D<T*Tv-Z3{ W!Z$*c' );
define( 'AUTH_SALT',        '5Dynp` `$5.Ui w4FjmdSWm>z/RUBkMX8<6QB`c<FgnfvX0CU.j_a&NAsL?u~lw2' );
define( 'SECURE_AUTH_SALT', '!>5TxV3eqx-x2+o~ pS@`(;P/Z*%ZL`y`WR5c- aT^?wZYH/s<fQ~)@$zxF(M`JC' );
define( 'LOGGED_IN_SALT',   'Zyk $fT=Z|(O-^I*9M0Bc]yj@owXP?9!}44+R@45Z*Rtua?$r{T@9z}ubSs,Lc_V' );
define( 'NONCE_SALT',       'NCZah)l].$mz$V.6cv*=77f4im9Wf#GO gM7!@TDDLvr8X|!}l*)j{qifr,sBpou' );

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
