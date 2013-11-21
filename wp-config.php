<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'customwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'o2#OW/xxc(si5HFNg?-($lxcT|K.?;u96XbM~JG.z6uY2$bVHJ[)y8vI>y@?|8.}');
define('SECURE_AUTH_KEY',  'y9BlLsD1RViuUmpU-;R& tM5kMqQlT?8<O<:A{{k=UO.m;/OIhE%ofD|3|9q{Kt&');
define('LOGGED_IN_KEY',    '(Ze2!bHBmQ@)cXpS%H*vr!AuFm(4s>s+^q+>Xs0-iEjIuYr<+|ThLE^6T2/?idtu');
define('NONCE_KEY',        'gym|J5qo<LxN0/9s(P9(*-I3k2{ar`/~M4G14uV}pc+:|v#$unQmwXHy4?x9_6H#');
define('AUTH_SALT',        ')C5STW%?>cH04%7@JE`LOzAE>nXJEVzFm1D_TGE$]:r+Kq+:=)-ck%hL?g+]:$-$');
define('SECURE_AUTH_SALT', '4|5hr6|k-y7|.9AE$Trk_)U{+|93{:T>:dJcT]*(e,U} qG9OYBTStKTDo!aJ<X/');
define('LOGGED_IN_SALT',   '}JY}^J0V2]0/@@UL5P*3:pE*Dx 8tBBiU+>NG--7v+u8nFv@?h+|:KQo@NlDV#g4');
define('NONCE_SALT',       'Duz#t?axLH~|*n$d9dw{.HKAb-*EE5M=P=tb)&](AtPD-OeS]diRqAa+[[P3)Z(I');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
