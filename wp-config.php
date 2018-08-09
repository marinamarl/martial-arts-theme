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
define('DB_NAME', 'martial_arts');

/** MySQL database username */
define('DB_USER', 'marina');

/** MySQL database password */
define('DB_PASSWORD', 'VE17tmsAV43HmEtL');

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
define('AUTH_KEY',         'Cj}|>!d[eYs!GkDY!2fsVWO>-``5l~9XKi(>?C8Aa#{!7Ct7a4#+_/[9Wkx#9s_[');
define('SECURE_AUTH_KEY',  '2@moW1#@JRhZ#5`cJSzzc$z4PD$&bYSBy&j]7<<_^@2UY4[&EbSj}=?h-=/,JH1,');
define('LOGGED_IN_KEY',    'UiQ~q%@MA3q#Y<VV)30/T:*C@1wPc&SFtp21oGqCXXIN~tSW^ vyZIlZS+qRO/1j');
define('NONCE_KEY',        'R_+8y!KXku%Sdyt9_JDC@]7Qro;&tzhrGim:O[n)4}VRt*7|HC.o(C64lz?,6K1F');
define('AUTH_SALT',        '8EVz<xhnSc72v$E_8e4@IgT4G0Rw<C>Z]Fu9<%1]Y*0}Xt?`)u M#=EoXm/B!?qA');
define('SECURE_AUTH_SALT', ':J+CSu0rT52G4KTFln[D4^D_O-Fo{]IXY<)<;=k77UiCRVnI=>9*3@+^aZaD#6w>');
define('LOGGED_IN_SALT',   'cacDn9osr61rzv1Hj=1sI^2D67&sJi1&]]YTs@fi1h4~P`aX8cNbJw7lVU+21ULi');
define('NONCE_SALT',       ';r#4m|_J8H3F0kUYx&VW{U-Jy+.K@T)1pMPke]E88edC/g be}d]O$5p1C7y--3>');

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
