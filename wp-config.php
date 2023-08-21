<?php
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
define( 'DB_NAME', 'sample2' );

/** Database username */
define( 'DB_USER', 'sample2' );

/** Database password */
define( 'DB_PASSWORD', 'sample2' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '>{)*A8cUiv_H3%B@!%N`c#T@Td{3<*rc&nW L{o7I>.e6}5uW/Jxq[<9Nntj2Luh' );
define( 'SECURE_AUTH_KEY',  'KkPXECuJ!@0m%b~;TRJ7]L10VIy-`vG_9]N(bQ(6!vf%u_Urkt#YtCUIkxNr,,6;' );
define( 'LOGGED_IN_KEY',    ' W)9{&ev#$wvgS>BFto|YG7-dxc29S?zEd<dyM5+BGBWy$Til#*I&}?t|xqI0QE{' );
define( 'NONCE_KEY',        't&~R]=OZCr.ELm=%3&CsNWkx`@PBY8_ceB3(yP(`GP+WMNwLY%tIA*h>o~Qu==oM' );
define( 'AUTH_SALT',        'xj/~zSt%FI]hn.R;tM&zR=2(M 7bsl}S&Zs14]P^qVV1U4k[+obqiu~foI&ZPDcv' );
define( 'SECURE_AUTH_SALT', 'mfL,!.@&eVG]:P&BdN)t_<Lj_DBV}y*|]%q,R+G8pHZkg(,[I+?XdM,=r#TD7PPT' );
define( 'LOGGED_IN_SALT',   '])qK<#KutOHSVT dzG5S(3xkh@lqjMkwJyEg TiufWR^<[%7fnjRM4r=(},FCV4-' );
define( 'NONCE_SALT',       '0zW%[AB Gdi1#p+po5bA+}R6A`XZ-[lF303s_?#]^4_U&BFqH3Xk:a7+^R~FJ$E>' );

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
