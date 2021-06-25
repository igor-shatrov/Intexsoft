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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '8&HJ_A`IW+N#(>8Y,.;gIa}/Yasto@b5&%QrL>[6op&D&%Ju]tV`73aoW_feZ370' );
define( 'SECURE_AUTH_KEY',  ']~r-_~F.V+RfJP}As*z47[+@U{X1See@7;IU@nU(4Mml)JEhpDj:o~ZNM{vd[_.}' );
define( 'LOGGED_IN_KEY',    '#Up50K]Qa&Y~19Xz*AH{zhkWR{nC{#_S^$uJ`fsE;E^0.t&ssZaU6iz8=dw{F;B>' );
define( 'NONCE_KEY',        '?2viWsZX=**a;&by6J<jZjO^6yy.SD/QScDG>48@8N$n~+bg<b:bNsNTB@Gw9-<=' );
define( 'AUTH_SALT',        '{BX.[^97)S73XiX}V`mA<7BLY2Y*Lx1FM$-^I%Rrz7h^~V%Qip!p*2f5?RK0%=<O' );
define( 'SECURE_AUTH_SALT', '*Nfs)d!mos9bHJGnE33}LdrOb*Uy(38>sI aVQ%p~y_mUU6o&Q68L94X<5`1,4aS' );
define( 'LOGGED_IN_SALT',   'Q7`Exbc+~EZdj>ec`Di~lhh.#gl5VQ,3Mp/$!W#U@^wHni4Xyazr$V91W@AJUD]P' );
define( 'NONCE_SALT',       '?`g4:#Gfpf#QvaO.mNJkAc/juDfC16%YCmF{rQlOJD5>a7K5rj#!>e.?2&7w *[j' );

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
