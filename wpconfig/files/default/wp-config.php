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
define( 'AUTH_KEY',         ']3w>p$ULH*v@U%Xs+z8inwlL2~d.W^oLkpF#%KYkYU74H:xtCZ_Uv2cU24^(#@#,' );
define( 'SECURE_AUTH_KEY',  '__`rMGV`%NA/m-I@Rg1cbIXun,$>M!hX^>+)).-zGfi/N]|]s]^]!JXI!fa:|x+E' );
define( 'LOGGED_IN_KEY',    'UhKWkPR8EH00|M,vyS.c2hQr?4|65ldVnG?#uQJHixm=8*>ibV+mXHy/,?Y9tGg}' );
define( 'NONCE_KEY',        'io?M-wd*r7;Sc1vRQ7[fD7>DJ-vWB=R8[}gTwq_*zDK.,K?e>^PA)Sa>^l/ kK+R' );
define( 'AUTH_SALT',        'z]<o<q=q!&>W2p8)&{3#=%?6dgdM(aJC^R&J*(iR6I[U+CA1u8FW]~U{oJCCW S0' );
define( 'SECURE_AUTH_SALT', 't(5_H&)q,&^e:oXnJg]iUb<^^}yATTwdk%E1;iQIki8CxA(>+;u}vHPZ(m6EINx<' );
define( 'LOGGED_IN_SALT',   '*Al04,PRRWMPO<Go#aroX&9nm+U:<LaU0u=B~)B_oLca1P+6ANlW>)dXt?`N.*XJ' );
define( 'NONCE_SALT',       'Z$<gO|10I-^zAO/-]KZ$ZG^]/yvbhC!Jt4Wy|n/@%x9+!0DeSf0`b}RL;:CNI>gM' );

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
