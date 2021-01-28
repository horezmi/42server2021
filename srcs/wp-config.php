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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'd6c|Q,!ZyT@R?ngVY1[g?n:l[]lgOeO]|*`Gw<;c*H9%~3Yrt}:GY3V89nC/QLlR');
define('SECURE_AUTH_KEY',  'FZC2f/%B>qHCln;)@RF7C&=r=+MAe3i+[LW*Z2ZX`bt9$9;=1hZDL)*AKMkUpIHk');
define('LOGGED_IN_KEY',    'fa$#^rd|/ZGv</?;h,NPQTypOD7*|o8@z10cT/3>1+_-t,A9v[`$R#(*r0OytRw[');
define('NONCE_KEY',        'hp)U-yJ[-jTL; Tyvj>4|~|sym~_:GuEFrtHMVHE^)2>7T1e=S$TLYQ$yy$2JZF.');
define('AUTH_SALT',        'cC /pQ+{[nCYV]N6hrjx#KE Ef`ji#`V%:hSr6X:Uo)N3_Q-^=kv^+|D/;3)x`G,');
define('SECURE_AUTH_SALT', '=EL?zU|3c ~%lT-*v]qpE5Il+=rEZk2otF0!Djm!w_%2og_N4u9+>!s-dvY)Mpx|');
define('LOGGED_IN_SALT',   'd.}tSD0=ODPC$*$5qwl5[ZnLFUO+s4c[Pqi!+KU;]pk<rQ+$aac]rYS^,FU)%F[#');
define('NONCE_SALT',       'a6`OWkGC$R?Omps G`CF`+kS3?i|k$>:OV3dz0n/01%`}y (q>p5YnV[gSb6v+dz');

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