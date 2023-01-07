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
define( 'DB_NAME', 'jardinierscoteaux' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Wd5a#$0yLsVa|TZ(uy]p!Ai==`nnF1xgI|_1NMb-pDXs[XkIb1l?&R5AFLQueuRD' );
define( 'SECURE_AUTH_KEY',  'Vk5vh ) 470{(JRG_54-/l+>y>+aAet13Gl*%9^)2~fF-5nncX.o?sCq;[{vMc.p' );
define( 'LOGGED_IN_KEY',    '8j5kM^P<fG0;&(D|WeS[VD@]$W){H=DF=X|G4|[, 7*HQ:@MW#dhR5hzn)mze!UB' );
define( 'NONCE_KEY',        '9{9 |)KY+b&=(.F @{o;Yh|5^6{A+(Q]zmsZq&n[^V)$A~m#aAzAehZ?@eI9D9~5' );
define( 'AUTH_SALT',        'MriV,Z?5?YK)<uuyouu/&0_zMFkGydAt{ToRotGAk8G^4r]wIZ!uZmRhJ- i!YA)' );
define( 'SECURE_AUTH_SALT', 'NvwHZ<s8+oWIpISj#8dUx/51.hvH-~.i911/p)?$AD>:yI~=e?,5:wjT{+ig*BcY' );
define( 'LOGGED_IN_SALT',   ':Qxj@FAkyfAmn_cN#{~s6F^V3v[;OqA%V^RVNNGx;h,xx~#xc*el3Xk(wIY]8V;z' );
define( 'NONCE_SALT',       '.%&}96RC3IO;h!W@5;&Rzl9{A{4:T%C-0!#,wnVYT<;~$~{qn9GSoB>r.`}2j~`H' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ar_';

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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
