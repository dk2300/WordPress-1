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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>4!MyAxc*;&qU.81kaPsxU!`snv{XShA5hIwOy`vUx~m%M0Ujo`hOF^R]CTDwPOf');
define('SECURE_AUTH_KEY',  '?)SUyIl>SvkwrHp7E1#RP-$V tf%,I(Mb50Vi%%_sM.`|_$808S#+!O%)l]]J=1F');
define('LOGGED_IN_KEY',    'ghfPEsVN/N2o=)9[5)3~#8#iM{/xZL*]*Nm:e^~NFw44<#o{47VJuM4(RWRwACuq');
define('NONCE_KEY',        'ox2dUI!TM0-@*Y^v$GIU*>V[K6Y <*;u]DO5_W/$6K?|zQrh%,z6[{U(olWH~ w_');
define('AUTH_SALT',        'VB>#[<~>V%t=-MSP:1*@~j[6K40c&/Bw/<#QY>h[%gwoRx y*-p_e lMo:p:X B!');
define('SECURE_AUTH_SALT', 's,4P:s*8JM~]-e%C-O#V)931pg-?P[[K(Rw*vm/C:Q4_QMnNkyvQ`0QiYp~Umqr!');
define('LOGGED_IN_SALT',   'uTp4}@sF9x~vTYZRS-Z|K^` *$~Y<1pl,J:5$jfm;i^ocTB^J@?-s9OT*7Lrn=sS');
define('NONCE_SALT',       'Ra1Q(,+Tz<AUJ(l^[9a1Kb9z@Uk{Ku:kg<E:O;6:ewl i/fbzMnx`n`?|dR%7;r<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
