<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('REVISR_WORK_TREE', 'C:\xamppPGPI\htdocs\PGPI/'); // Added by Revisr
define( 'DB_NAME', 'pgpi' );

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
define( 'AUTH_KEY',         'TVv|lh6gLW_uHw1nQ@]2ZQJ.$8#}Z&4:g=x:N Rq:m*H}`@#7cS=mYr)[C7#y2oK' );
define( 'SECURE_AUTH_KEY',  'ye6;60_aERXKXCk.7q,=J{!$;y} <NuLrgt`>fH#v>z61iJ}jIv+YGXJ9(E7Hb_E' );
define( 'LOGGED_IN_KEY',    'w}k2CcI;%cK{?D&=5E*`*TYY;wuz#G`n?%Mx%AdV![]GGKn(8W-6`8SqPTLPXAV0' );
define( 'NONCE_KEY',        'wII$>QItLnWwFv^&SZ<@Zb/j~1^[&Zy{^O/W$L+WBlG?Uy?_sSZua0kYq#vYPu=?' );
define( 'AUTH_SALT',        '}|PqHxwZD}x ^(F4j~=}$FiR`I7pS#~-lR@vc0)oTTe=9buRi7GKZ>)lXE4xX%z9' );
define( 'SECURE_AUTH_SALT', '+UroG6.^RV_%F<(e8aNr |xS)u0bny{uy[,UYxX[/O3xYP-0KVCvcm) zE)S!F|@' );
define( 'LOGGED_IN_SALT',   'e:$f<r=e3Jbeleo{%2Ky!U-5]pM<JN~F-y]D<xEL:{f={|02AtR]R>Aa2W_JLi_U' );
define( 'NONCE_SALT',       'GU9DVsN`5a%0q4o4<ZAmS/Oy)[jZ*op_}ae58QXNz=G0Xl:$wv:j5OIH>R)0ud7q' );

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
