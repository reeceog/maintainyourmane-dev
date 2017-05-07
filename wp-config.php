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
define('DB_NAME', 'mym');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'mr:BIk*}>M8&:.cqX]eHqM o2f9$v*(X[!}_W3p%kNsxX?Ph) L#nC9N)JhdY:vm');
define('SECURE_AUTH_KEY',  'A#ZcCHHB!:kiYm,H#4#4zotwhJ5A>r(m!2.svBr-%!P+[h%S[a}K/M59Q|cy.mQP');
define('LOGGED_IN_KEY',    'T`0.uRy7^q]{ kg$#{KLt[*PUbplhRwwD;6|PA/r..*qWz7c06FeBWA},gWH[38`');
define('NONCE_KEY',        'E7W*AD1|jm2n0~.|ekSX~_DUt{Gsl~bq`&Fya9c0}F24TZ)Sj%TAfj0p1k-vNI[3');
define('AUTH_SALT',        '1TGmv%=aD:s#_G~6H5U#T$ ^hNZ_bF845Y%CS)%0l]^gGfyiUY><7W^E1l~5?K8D');
define('SECURE_AUTH_SALT', 'NG|]Vbp8HSwUMqA,.TrY=[}F><Z%_qFF:dkfZW.P_`(8AfBL~TOT|j5BMfU`/:S)');
define('LOGGED_IN_SALT',   'EYy[g{Awi68dp=92}sMq_4)ge&!T,.jf}mi!O)Ul6>z!eOglDo{o0vOV=:$t(z`P');
define('NONCE_SALT',       'dx#q7/hQ93SBo`!a_DQ{3cN;w7/<>;|};*x0uG(~Qfyiq4QMSKBkocfk~{)nBIbj');

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
