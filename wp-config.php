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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         'T^PS-`*tvoPg~D-[oe@,jO?{;bF,LnYE#W(J=>_XgI0jQt1AP|q;mxOo]}|(HC^s' );

define( 'SECURE_AUTH_KEY',  'Im_%:i3%XJ1vQeqD2V/9${,N(4BpNY1its>@I{sDs4xwKAkCi0=h5#ee0T_q5pI[' );

define( 'LOGGED_IN_KEY',    'z463iVG=Kzof2i[?CN}!]-cM<)/%e6q D8:X{SgG  q^aGmJ<]B|&>$MjvhX2o>P' );

define( 'NONCE_KEY',        'L)B hM,l=EU0d%L7lW8ExrIvGYDRfM:&So8eTbPz1wLA7r|il )90RF{WuP@@lRE' );

define( 'AUTH_SALT',        '^dDnX1dpe:tOelb^$.OO:XDdW)_$LYso,aX/3P*TeW)1yB@#`{M:--R;)v0 z7aG' );

define( 'SECURE_AUTH_SALT', 'ppw!A7PkpyQ-0zU~RP|c0wC~6=HzEr_)!!3BrtAN*x?li)T,iXW*q@|if|#};t:?' );

define( 'LOGGED_IN_SALT',   'TwZOB`hK#;A67$R&(T@):xF))P,%.+EB>az:S`l(y)|3+Ud-ze-HR.C5l4VTyyGe' );

define( 'NONCE_SALT',       '7d^vigN2B-S}oUY;_Z50&94E+~^:*+mA4sOoY2(9&bzpOUUV-`@4`BBMs{M{pTHf' );


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

