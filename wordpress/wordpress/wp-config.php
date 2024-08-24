<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nabil' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '6s&u`w$*-3&F,}H9)r4lr}}3}8FdaO8JC2oa^rtqrz]BCf:cJK2F]Pffp&-#&#`0' );
define( 'SECURE_AUTH_KEY',  'nh{M-<7U;?1yjec;foI7&^,a^0gk:`yXjMJ6YT.Uv[?z|_}lrj-[SNBtyXE7zh+U' );
define( 'LOGGED_IN_KEY',    'r91+Cl,?)w6]<^Mjt9{d^]pSYs&t}@q6( |t k4M4urhXWIV%[};XQ5,SilT`r-6' );
define( 'NONCE_KEY',        'H4K!+6PXuu-q&7O:=rpsV~]RhqD{op~8#{uC3;1(p 6>)s(NZ2rZ_j<S=5?T1#rO' );
define( 'AUTH_SALT',        '|]%;b>vSA=+R.Tb9(lSH-HM%c@SK+#OKBiT280Y_#2J8&(KWM.OQFKL4 B_?Lj _' );
define( 'SECURE_AUTH_SALT', '!6HZ(a?Th|kiK7#WL;b4u>$v2pz]BoJEj6,}xsH1G&7ii|]n=V1PucfnA|>hp`A`' );
define( 'LOGGED_IN_SALT',   '^+c-A]sdayym:-mJKbabjd@LEX~mq}t.cB6i&q]EFvwpWKutU_J/UFxLokQVQlX]' );
define( 'NONCE_SALT',       ' EcBMJ28$c17J~{$.Zw~LCza Q|8=,>g65=_[d4x]~Fd4_e.-Y)/4H/Z3i+-rEid' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
