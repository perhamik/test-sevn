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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Qwerty12435_24' );

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
define( 'AUTH_KEY',         '<r5As/L5M-@lu`wY ijEh_yY`(ST!StIjr,JRY~[s4h2Em84!;]?F1EWg!**&B*:' );
define( 'SECURE_AUTH_KEY',  '^ia!DO6hcz8*=RO(So(lCMokd^$#4<4kz:=A3NfjZld!a96b-~pHJu5fFWMVd,_u' );
define( 'LOGGED_IN_KEY',    '*U[o>3,!-zboy&SIGCTr*d=No04ocwV[iCxG`J)W:)zAUUH1Gc<xKgM_t{]T5|8x' );
define( 'NONCE_KEY',        '48.bmAf;{QnPTtGj4+N>^;/]__;_J|5@o7Q1# #<hI4egNYaIxYfRMWlK9owI<$-' );
define( 'AUTH_SALT',        '!kJb1+oaqjok9T(:J`XQTvc[!IZQA29@bMP<sDGb-sCj)^2$(CmM<O*zb?TQgTVM' );
define( 'SECURE_AUTH_SALT', '=n?5t_b[;HU=^{n>irEa1fSpIz64Rg@e&mv-9ZrjM=_@<!{DmlZ9,fKVZ:<w~5m7' );
define( 'LOGGED_IN_SALT',   '~kX%%8y#zBB6rw}LnFDVybErw6#CBf0z:J:MJ2jlTuUrz1o[Kb)Ka%$UUH}uSY^)' );
define( 'NONCE_SALT',       '@mrenkNnf>;m|Nf:<epD*KxC)pA#Hoi)6,0DT<pGRXSv&Lk20;h[)x!>F%VN|3q6' );

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
