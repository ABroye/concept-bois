<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'qtbx0295_cb' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'qtbx0295_cb' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Wi-Fi@04100' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xWN_n8Es5puvHL8`+b:2Ed27!x>EpY:9bxz Hv,u6f-;.nudT)xuS~n:_lX,i6i ' );
define( 'SECURE_AUTH_KEY',  'LII[r{Aew-)6c >2axR/0kY1m:),-n+}{-~`bEqQX>N7W?O/4 +CLKacYX*&8b7,' );
define( 'LOGGED_IN_KEY',    'oW(uTi)pI(4LBCGk*E-P;MlW8EV4-D3Ubu<]L:INrLH]M$*flhZqbO}Al|&[m8ra' );
define( 'NONCE_KEY',        'auG.Ll4!,Quig$?M&`dRsN|n250B#d11(GyHs=.cKf-ZzT@eRP6!z/fG8,x3@[O ' );
define( 'AUTH_SALT',        'x_=)<{+|2S|%wIJX}pSMQNYy&.EZW7IPjx~8R6NGfxKHJ iR^GVZ/XSQe7$U/[B?' );
define( 'SECURE_AUTH_SALT', '^R-Z`XjKA#mPU-fF# q.I.@XwD(x/#R!u{B%$jV5`0x|K@?{yb*YA8T1,tO.g|kB' );
define( 'LOGGED_IN_SALT',   '`Dd:wBc/M.F++E^>N#DFk3YZu7Xzs]Nto!WKM~WXC7g4aTjnZ(q|BTv%2<^<nt0e' );
define( 'NONCE_SALT',       '>AG;W~-xZLQjM%],S7}UTo{H6,:,yzGEci[Vs7MYhot}*#r %e)bW:%vAe~dmbOh' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_POST_REVISIONS', 5 );
define( 'AUTOSAVE_INTERVAL', 300 );
// define( 'WP_HOME', 'http://concept-bois.alainbroye.fr' );
// define( 'WP_SITEURL', 'http://concept-bois.alainbroye.fr' );

// $is_localhost = ($_SERVER['REMOTE_ADDR'] == "127.0.0.1" or $_SERVER['REMOTE_ADDR'] == "::1");

// if ( $is_localhost ):
//  define('DB_NAME', 'wordpress');
// 	define('DB_USER', 'root');
// 	define('DB_PASSWORD', 'root');
// 	define('DB_HOST', 'localhost');

// 	define('WP_HOME','http://concept-bois.alainbroye.local');
// 	define('WP_SITEURL','http://concept-bois.alainbroye.local');
	
// 	// Activer le debug en local seulement
// 	define( 'WP_DEBUG', true ); 
// else:
// 	define('DB_NAME', 'qtbx0295_cb');
// 	define('DB_USER', 'qtbx0295_cb');
// 	define('DB_PASSWORD', 'Wi-Fi@04100');
// 	define('DB_HOST', 'localhost');

// 	define('WP_HOME','https://concept-bois.alainbroye.fr');
// 	define('WP_SITEURL','https://concept-bois.alainbroye.fr');
// endif;
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
