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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wts2020c_wp' );

/** MySQL database username */
define( 'DB_USER', 'wts2020c_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'VYWJRKtIhfaO' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'sw|RKVd;nUdQSjsqpfCFYyAbxENR-} /Q(>dk/OeRvGH--C|Tip3~d#/Yf0O>*84' );
define( 'SECURE_AUTH_KEY',   '}p+.+?:^GD pokVsfVQ%{X,lmY:zO~h^:lC,gi=`j;r-|#@MZ3:~v5Ohed,(rze$' );
define( 'LOGGED_IN_KEY',     'l8.?-=L2^-BouWgYs)X6niDDBDfG9E@`DO7A.]NeA1HsF^I|nq>p=A?7wc=A[@vm' );
define( 'NONCE_KEY',         'l4p;2;V+n8.{xTjs>@i}?.k?AeaW!Bw.Ii9pk|D1>wJRwxS||(AmxZg^#bj[3xg#' );
define( 'AUTH_SALT',         '}_Xjg<&2d?W`!DRXt jia@$>Yo_y;X~;$Z9V~*,yY|tf&5Ve_tn?T.IX)M6S?/B|' );
define( 'SECURE_AUTH_SALT',  'D^KTz.6-dMHch:@FFi@dQZr*wI?CbF{o=_n^|>X!fU3iukroDZp{]^.KAUOVM!l4' );
define( 'LOGGED_IN_SALT',    '%)(G|%Cx!B J%Z2<$(B- ^pFF@g4`TuyI-I>52-^tcJ4=lb9#Zk+o .9%XWWIyxL' );
define( 'NONCE_SALT',        'mig(6eE43Dc/^Q_ma4z%A&gt5*Yx0Tp%@hxrNcI=ohd~:s<]B/UkT&Nu!/m1A;6s' );
define( 'WP_CACHE_KEY_SALT', ')HC,Q99uJY:3,x!@:)7/;$ZN-D@e4*](+I^A! LMUn>%1m0>+G#xz0l]7&6t|/YS' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
