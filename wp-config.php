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
define( 'DB_NAME', 'pethealth' );

/** MySQL database username */
define( 'DB_USER', 'ledoan19' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ledoan19' );

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
define( 'AUTH_KEY',         'z,[nPfwefMW,B*{_@bXGB=jk/vaJ~D|%HTfVa!<@Rd F^byu#.q((B))8be{5qIo' );
define( 'SECURE_AUTH_KEY',  '<Lw*qw$j+7>9AzPaJ_15p`u2I<i?>kz2*Kd:f q8W>5Wlcph=m^aQsg]FL1^rPoz' );
define( 'LOGGED_IN_KEY',    'sJH*OnGL-S+f<3SJBAdvqG oU;fr/zE*D(-4kOzSLDXit#1><-&sV)4.Xj{h}a~O' );
define( 'NONCE_KEY',        '#M&UI,xEHnZT|q0vNO:`L!RFeJQ}xD)]W4nwz}`C>K`yHN9&-`#nX-5HNAW6[`Md' );
define( 'AUTH_SALT',        '2U++<(4|I:SE~^jgzKn@5md_JsPlw1`*H?jBG&&Q2@_V/y 34P;_$1ue,)yQoj&c' );
define( 'SECURE_AUTH_SALT', 'CSIUtwBjv/]9g>G7xzsywb*> oYBQj$[a+Uv5EWK6vLJt=l3&&c&ja=@|D|9!t$~' );
define( 'LOGGED_IN_SALT',   'l@u*5Jh+sj?rpFc-HAv@IDa<0}a*:B~_2T3:q:be4.1mu dI{f9.N.X.SZ=uB3;c' );
define( 'NONCE_SALT',       ';Ij$!Fru:{`Ml!?7w6n9Z%[BO`zqyX~16<JM{]8f4v[Vx[6()5lsWLxz7a37I+W&' );

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
