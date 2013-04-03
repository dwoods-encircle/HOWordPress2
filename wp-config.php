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
define('DB_NAME', 'wplocal');

/** MySQL database username */
define('DB_USER', 'ho4dm1n_db');

/** MySQL database password */
define('DB_PASSWORD', '4kuVD3XNSa');

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
define('AUTH_KEY',         'Q/AeQ0@>ZN*Wm~c#A0jD8c=/sSpX;`!:~kT9@<^d,*QJP7sO_Nc+C;4KRe3=#oY+');
define('SECURE_AUTH_KEY',  'zA|)H4U-L>aeOB4$FCi46dG:ANBQ<l[+eH${Fn,|_Ju6.iC2%7zR=Z!jch]YS|K0');
define('LOGGED_IN_KEY',    'c9ay70@9}I.PH,.w1G4sY-LsqwsM#JdLX5!G.k45^0*q,1H#,D+1;8Ui&VxHI)}+');
define('NONCE_KEY',        'o2R_A79%k$TH/#rdv|W:IKT`Nqyy^p;1sp+vLgF7=n_/&)95fk$A)E<PQaK<pKgn');
define('AUTH_SALT',        '+}2hD^?1q~jF|uHU-+sVVJ}p)]_#JhUc0:Q|&9y!2S1E.}-=A[2^zfw4Zn;1|--J');
define('SECURE_AUTH_SALT', '_yFN8B(>zn<%Up#G}-|go$rOIkLT9>S{jEWV0=^JCg8j#nLca1]OQM7l3h8S-axu');
define('LOGGED_IN_SALT',   '[cFl|HW+IOyw|V&M6Nd67!#S%($@Ht|f6|L!y{N LOR=m:i~)_.17%m)7c1;Dc/z');
define('NONCE_SALT',       'C+rs2IQJ%#HJ/Y8%#pum.-=mz_mP|XY?LX,]]IEQ8MkJu@N{Xho~<2b|,xl664ZJ');

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
