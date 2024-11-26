<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u756016664_gKL1q' );

/** Database username */
define( 'DB_USER', 'u756016664_wbBKO' );

/** Database password */
define( 'DB_PASSWORD', 'Jb0Yh69OQj' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'M17H3kSdszLO[qi]ZD0uDGvqsampz$R?!0{bAD!|,@NM%#(t>{2O:W-yA OGkiE,' );
define( 'SECURE_AUTH_KEY',   'Cb`-nRxUM1;x(Mu+;c/VIcSJXj6&tAlma<pE^u!|8_9V@/(5RfF7v2p`k*Te|!fq' );
define( 'LOGGED_IN_KEY',     'vK<GGasP-N!Z4AS_;e?$!^p<my:k{w`1qMBydUZGj7G47U1jW,Co?V?k^sji4HiI' );
define( 'NONCE_KEY',         '>0Z.Yat}PuYVDFg&#ICh2k63!?+8c3m*_j^vZl^E0;92PxJb1;+W;:W3)6BV9bvX' );
define( 'AUTH_SALT',         'O_vP_#RKlcxj,3Kv5SxxsqUZ}.So$w:--Ky$;pR8Rx2V3`KR}~PoimSc,k;j{9NW' );
define( 'SECURE_AUTH_SALT',  '>-[, cu3xRzcco7;qj,$vL4*qm/U>pO2&^DFlM/1emCJa4gCFm,0r *iHClD{fT@' );
define( 'LOGGED_IN_SALT',    'Q sx~b{{EJ0AILvIjM/Z7lY@[|w8[ikq-/w&-hsHGvn-qn,*4hu1+kL0}LqQ*~,K' );
define( 'NONCE_SALT',        'dwv0^k(9XR}_yAs8=c`U7rb@8>e1;{T 5|/@.ws<yg]p>G4@PN.9G=uX)T15oDNR' );
define( 'WP_CACHE_KEY_SALT', 't%m}B<@RKg/i)S|`:YA4j{Zne;J8,==/,ea$IxaFCU0_@k>Fcw7H/f&T&Rjc-!:f' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
