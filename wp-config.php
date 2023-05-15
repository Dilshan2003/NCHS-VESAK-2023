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
define( 'DB_NAME', 'vesak' );

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
define( 'AUTH_KEY',         '2b9x:E[6+L;{oIP|Zwe ~}>aL1eCCy|8)S^AJn`UOq.AGjehdVWsN2eq[*F@cfQs' );
define( 'SECURE_AUTH_KEY',  '=,Aw,jp0r_D$aPqOw>pBU94,Je6)}1-W4RSo>k2?$@C |gD>Nx{Og_BV 6GsLL>G' );
define( 'LOGGED_IN_KEY',    'EMYjHb_1E{!cU,&<kp$=A3z$,zTp~d!%D&H{iMQgz]n])ZJupOOQ;:>03175bcOT' );
define( 'NONCE_KEY',        '@u[=$ad))_sRPD?_Xb;Ox<;-V:ziT>CPR>dFYXTZj}INFxx2ENuN[%W>wpq#C]el' );
define( 'AUTH_SALT',        '=m XwZ=h,-;GP:T<X9-mv~dQ@Ov;zC]*p3YFKVHgd+|:{MsPy>KblI[.w)OokxAN' );
define( 'SECURE_AUTH_SALT', 'uF iDsv*tmcHY<+ GXY`_LOugn3TsBJ/-k2b|t+kvxDgFi+Z^OKov.D2c`|ZePy@' );
define( 'LOGGED_IN_SALT',   '1{MWRq`}Jd,u` [-=Xq?gVH3G$k-c}kYJ~Oie1R=ni;i7yJ@*`+Y.o]f2bL,y[-?' );
define( 'NONCE_SALT',       'C5c6^n=78zq@JZNrUW,.8rCTLMhjs:7LcZA:~kVviyn501~9)k#txl<^0&8+;*zt' );

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
