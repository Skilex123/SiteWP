<?php
define( 'WP_MEMORY_LIMIT', '256M' );
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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'd03e69d0' );

/** Database username */
define( 'DB_USER', 'd03e69d0' );

/** Database password */
define( 'DB_PASSWORD', 'GWAh8pF7ECSiiTAaRbyH' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '=ReKbiv8DE_Ytf$`PdSgE%H?lb>sR-!?ehOfRwVFsPysP).W4&Gx6b9_5zAzuR/&' );
define( 'SECURE_AUTH_KEY',  '(x#{Yx-*:Qa]L{yz???pZ2Zb4-9y.)u/+<{bia5t-`#27(-6^iW.oKYHAPkn$m/]' );
define( 'LOGGED_IN_KEY',    'h*br{dskx*eMkjiQC;.9o7[[&`M[KvrpiP_?_vs=}7hKg3%-c`gBb?Hi(eSDQ6x}' );
define( 'NONCE_KEY',        'xd>w)h;C051=&BqnG$rsaMtvm&X4G*KHhQ|Ps5)6{5JN?X?MilkAWyT3m%isz?t:' );
define( 'AUTH_SALT',        'J6YxFO?+rNxd]ecMu)u+c.JJbZWJxL3cdLtb3R|1QBRW=N]&6M@{Uldy83N#NV3o' );
define( 'SECURE_AUTH_SALT', 'jp>4[k@)N$q+[lnw6<4Hib6^n|16G67C]4W%y.MaiT)<*&cN,S3pwA1U*W_$#7&C' );
define( 'LOGGED_IN_SALT',   'tjSk2|hzL39s]Fb=-uoB8osnvyTN.E@||)XE4>#woYO!kM@CxVfAs!^Nm?I.WtJn' );
define( 'NONCE_SALT',       '/=Y*w</XyS1#f`ILVE;<[SF(A0=!1POC}z!DG8:4KX}@/l]+XK8tth{H{<r,O.pV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ln5fy_';
define( 'WP_POST_REVISIONS', 10 );

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
