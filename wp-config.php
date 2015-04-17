<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'valeriesstuff');

/** MySQL database username */
define('DB_USER', 'valerie');

/** MySQL database password */
define('DB_PASSWORD', 'FwS8xzsNRnnfX3fs');

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
define('AUTH_KEY',         '*kx4JH%K-QRx%CIhz(m)F08OQ@-L]d$$,HShnKOb@-27~JjJj{ddX6{xzpEaV(EV');
define('SECURE_AUTH_KEY',  'yT6|J#fNU#@;t]*etYJmvTm6ysbwiQ$QOaPr61/=i6[CQniP}`r%lH.?S@8{Z2#[');
define('LOGGED_IN_KEY',    '2{>-<<k_~IKZ}GcN~xvjj*#+4G&+px0.:2,2jEl-!z@ea|L/b:Z?]mh,-O<vEhjf');
define('NONCE_KEY',        '|W<,?=8HW waeR=)^-j)OxpuG}Jgp+oTR%n)eUEm)=D>~7qXwT3oMO%mj%Yk8J2.');
define('AUTH_SALT',        'DgyY^~AQ~5Rzm1h&docL-e]x&:mme{~VPCK0*Q5.VWr |bR#$D{TEz^DN7g&!nL|');
define('SECURE_AUTH_SALT', 'm1AyD{?Q9]Ju.Smcl+bPx68_C0)aE*.}l;[+?t-ny|$)[Y;zjK*!<+Wj-6^q!F=(');
define('LOGGED_IN_SALT',   'j]=x/|O/j#DpS-BZarIVw_Dlm[*R<+<N-%[A+-h(iZ%.64qmBB+}CL/3yxRy+{._');
define('NONCE_SALT',       'ZyI<J9vS5)Vc*Jwc,rN,n:7 wS/ho-*qpE{dtl`7ZD+gqiw<Kog-Nb.je)<s0V;^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vermontflavor_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
