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
/*
define('WP_HOME','https://www.ebizzness.cf');
define('WP_SITEURL','https://www.ebizzness.cf');
*/

define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST']);
define( 'WP_SITEURL', WP_HOME );
define('FORCE_SSL_ADMIN', true);

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
       $_SERVER['HTTPS']='on';

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
define( 'AUTH_KEY',         'Ho(XM0!Dh?+g2{B3&k %&wv-[n}X|]MTtY*8.NYW_+2&g6@{<yDjX*u7t0#3/uQi' );
define( 'SECURE_AUTH_KEY',  'S/jjVxBH /YmE>FDueLGI%^hXnK])8MM5W-Q:O>&2MA.GVW Xyxu48)^#JzZ<CX7' );
define( 'LOGGED_IN_KEY',    '7|FMp]@0Q.W#d:D]^vDXXAA&![|*R!A9S0+z6^st.d~luY}uX*BP>YqQ$;R>X/fN' );
define( 'NONCE_KEY',        '<OfN13^iCnPo;p}Aa5S+fh(ee:Dx#o/:ERNao-Dp[x8EW2!$G3D)48IOii}ZG+~`' );
define( 'AUTH_SALT',        '[eoUgjQH39)t5LdgRde>v5>4ROZ}*8F4Cw&S6N=C0)Qu;,Ge$vw[(#d-G54o/Ixm' );
define( 'SECURE_AUTH_SALT', '(6?y]6S3QfrqW8YW*I<^QSNL?fN2$RJ(|l?|3|/} J!h5$TRH^OjM6$QN.(Y2 zK' );
define( 'LOGGED_IN_SALT',   '`8yFmKf^4]A8(;zr;!!Iu`XuxOLF9ap.w{:-=AG|7A/_/bH#dypv91[QvOp `EcF' );
define( 'NONCE_SALT',       '$+X(?&`stK/HANvX+~E;@!BX/WA7cX9%a*0u*TJi=FzItEE4oDj)~.Y_d=YA>2!F' );

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
