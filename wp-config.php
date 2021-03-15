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
define( 'DB_NAME', 'LearningCenter' );

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
define( 'AUTH_KEY',         'Lo~lAv4U`?7TP`iPT4c~goX~QM{]/wwHOg$a 6c{S]iKDD)IHPiEyY1V-7c>*PCf' );
define( 'SECURE_AUTH_KEY',  'G#ya<eo`#j7uRoP9u^szq2I(%T~qf^*)NT!UC`<u%/$@^+NBqVY_/kZqJ(fdi?#:' );
define( 'LOGGED_IN_KEY',    '+Di8orW@8lr0NvN 1{8cWMbT+Bs4Fs]iG)c^GLNOP7OtV7$}AUxw,UX:`-UZJ&d}' );
define( 'NONCE_KEY',        '=?HTsSncdbj,Si#|gMHQm:9:&YlE+BqhX#zZTB fhii9]S_L*]=yz-FG5b(H}:dw' );
define( 'AUTH_SALT',        'myykBCI<# L1v@E-&VrM(v^fy597<q2vj+ySqzOM/~hziv@oOzFKspy[E--8HzF0' );
define( 'SECURE_AUTH_SALT', '[{sKdI}ODV[k47L=]{e|ly(x8T%ADrwxO?R0?qKTeKxZ6%z1?kGvD2:vz.cLI{xQ' );
define( 'LOGGED_IN_SALT',   '>{laD*6y4XdL{<}$UyJ8e2Ed?E*dOO;As$.Ov5,FjOU)@5N$~~%b.ZOcKv|Ba%eQ' );
define( 'NONCE_SALT',       'hourXjFnnW[2)w+F,nI#[<7Gx=B7tcqt2P)>2NI4*d288wZc=&!kr,PI;RriBXYY' );

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
