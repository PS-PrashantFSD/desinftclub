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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'desinftclub_db' );

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
define( 'AUTH_KEY',         'Yw:Rz7WUlBl45c_SZpE7(j$J:>%J*!}nm]]7oX=lT.p5Q6~9^9BaqG!t4}L3#4hm' );
define( 'SECURE_AUTH_KEY',  'N+~fPz]SEo#;m9Y#GBH:GWNb9{&zE%}dn,v!MZJF3bOofTr~B2O_ilC][-|^c(UR' );
define( 'LOGGED_IN_KEY',    'WFvh;E!Ad#H hnVC6tIh08vS?%d)OE.hqlt3,Dp]X_&QRPp%~W pWh72h:H}:@I~' );
define( 'NONCE_KEY',        '(*u6}Y|c|dsU&&H>+h .J,v3-?6VGrd~lCVXD`Q^EK>3qq4l%z5NVEau^f<Tr~l_' );
define( 'AUTH_SALT',        'zZF8EfH#^mf7Mo55@oF>CAEfyv4x31S%=aRC0erKi[WS-_!I7<wcbkzEDAP@*Rl@' );
define( 'SECURE_AUTH_SALT', '9sK!Rfm7FSf`-6CWYMdjfTOkWZNR u%arCH~i%oV}q`3FdiT12CHu?!cHh-R!0-Z' );
define( 'LOGGED_IN_SALT',   'ia,U4JctnlZ.0xe]2-Tqsz3R~p,N,QdEW4:a*#XH6^2:,XXd1NOmXN4h@0=2nPra' );
define( 'NONCE_SALT',       ',#w$/5G>O]^;562Anp`|kLj~C9-y1#{*gMq?^ipjN^fep3fmII]!03J3#oBPti9[' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
