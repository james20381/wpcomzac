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
define('DB_NAME', 'wpcomzac');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'V!2dFS3dk+wMS?[&1-q#R{]asn|CaF4yq%x<+n|)cCoG4!!&Y#ba ANPo35uqw1y');
define('SECURE_AUTH_KEY',  'gNahRn@(Tc~e4FsHsNYf%I).T9ro>xD5g4v#ZEo(h]y/#y:!eMN;<v[]?vx;vLE3');
define('LOGGED_IN_KEY',    'E4q:*-j:Rl9ukKDu^2|Y/{l8E,IErpdA6[%x,LSCUMcEG?e5{hm!--2g;L;ihqQJ');
define('NONCE_KEY',        'S`|L`SiPYG@.OZ:[r$8&mMh/%EtSz2j =(D:.SK>he|rtxjyy:|k{S#t04Y*KC;U');
define('AUTH_SALT',        'x|DyLR-[#JhGti`YOt,?pKLp.E[FSDvSruKS^e-H( cC%s_td4}ZWMA|@ X8T/v]');
define('SECURE_AUTH_SALT', '-(1{~p$I&bLm%ZO z6P;w+yCEF-,l e,w(RHrwlo)]$CNiI75~[!jt+V% B8*=KN');
define('LOGGED_IN_SALT',   'C=t9$#cr0``d E?N|V<vlK[*l?yeh%bz}O~#I]Xnn0e~ZOzR?qTWjBZ Y{mn7C$!');
define('NONCE_SALT',       'dJ`%^d/QCofQpZY5<Kg/8/J`.b]?vo:))^Ypqd6#[,FD,5x{qP*6cKr).N+91Y(i');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
