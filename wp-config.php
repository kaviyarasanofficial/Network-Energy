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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rectubmx_wp439' );

/** Database username */
define( 'DB_USER', 'rectubmx_wp439' );

/** Database password */
define( 'DB_PASSWORD', 'P5Sq@3p9T]' );

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
define( 'AUTH_KEY',         'ud6l99v5lxfpxvrdrldgztj2dpcombqpbtfdi5on60gdaiduytwzjbk7mbocmjkf' );
define( 'SECURE_AUTH_KEY',  '4ygl0wruy5arp8u5vl6ul8hepjegsxuijslepmuhvfaqnumoafwkl0rueie8qy3h' );
define( 'LOGGED_IN_KEY',    'zdwp4zl2ohuchhncvaexdrj97xynrn8goeytgvf92ampuensxfvhkgnukagomnbv' );
define( 'NONCE_KEY',        'trk4gvlomu1t7w0t7rakx0ucv2h4zcdtqrbd7ai490yy7je8cekk16o0lhiwfq1e' );
define( 'AUTH_SALT',        'kb94ax1jp15qszkrnspgmiqeebmqfnsu4na6oyiybrdew3fdlbmwbzw1kxebkihn' );
define( 'SECURE_AUTH_SALT', '8lmfyygu7slhuexv9ffom4kgomw2mbfktlyikxf4kbros2iheyfxazgk8naxt3zd' );
define( 'LOGGED_IN_SALT',   'kl3teouwkp3tu2crluirukzrenkw1wvhi40vszy0ehnemz3w5ba3p1wqvecadytt' );
define( 'NONCE_SALT',       'twqzsyqa9wtwksfwur2rt8lp6ehvojodujdpv5sslhvlbetkkgn2f2l4h5uvcikh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgv_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
