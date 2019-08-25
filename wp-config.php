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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugindev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=A`xr[L2u Vc.dV0-6w5^~YQ.Cj$eAMslLVxJ5<Nj]BN@j*RJF>C*ZKDTznULjA&' );
define( 'SECURE_AUTH_KEY',  'W/w#ISfP~^ny?~bB(Qteu:ew]=[b)V]jeCtHrsrbJp+2q#v4Lp{_]0=<+4&ro;Us' );
define( 'LOGGED_IN_KEY',    '!ZkqOPVX|6kWqXEkp,<>OZq!{P1<XvsjF=rF`2aO*.%#cOw2:%UTSaNK_:)7S{X%' );
define( 'NONCE_KEY',        'Lv&C6]w[i;n5NA*#gvY[DD?qs0gJ.CO<Z)aaL1x::]3?(t%r>.WVD^ITCeX8x-U_' );
define( 'AUTH_SALT',        'YV&8%K?gjYY2j<xe#L** O7xo&% TlQZ8/RmF_+^>M`urfU$EOU$V=j2%Uzv;Z8 ' );
define( 'SECURE_AUTH_SALT', '_1g.gjs~{+Z0K(PVO9s$&Y:;zlZv332V+$)a9/~2^:,.CALt58ft|ls[ZI[{Z}-~' );
define( 'LOGGED_IN_SALT',   'x:s*6a:Fcc8TOfEjg9:QdUmH4O*hkcL[-.r;JywC^=^MPi#_y(xXp6]^NnJfi=YY' );
define( 'NONCE_SALT',       'o&ZU:f1Z]TnWZVnBO(chuk!j2ng6B}4_3]+]qs8t~Dsq:H2AY-IR|2!;N1aG$+Jf' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
