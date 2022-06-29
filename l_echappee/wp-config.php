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
define( 'DB_NAME', 'l_echappee' );

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
define( 'AUTH_KEY',         'Y-7$2f5#Ls8^r10*.G!j-`EC&wrmAI(4t$cv&r}td_H$2V0OH%YE#b1t_.b(4d4Y' );
define( 'SECURE_AUTH_KEY',  'TG=X;}Uxz:kpD :iBvp:E,[LU/[6T-rMuR^?F&&m)zVIc@Febv]k!Ncv~F/xFGs}' );
define( 'LOGGED_IN_KEY',    'oY}%N/.D6uTYIIHlKj^$lX=)2DTH4qJV7eOOO`Z/.8{N.N4_o2F^ly&3w!fsUXY0' );
define( 'NONCE_KEY',        ',VxR(yp|bIhIR5@(&I>sR~lZm`-.r^tQw1&@$q?wYOr%[H v)mttKZMqYsJ$AYdx' );
define( 'AUTH_SALT',        '4J:@W YKH&EKW~y9VN%vJE/W-aA|+CqN )ifzZ0xAYgE%+lcC$$*P>5U#a0P<(gq' );
define( 'SECURE_AUTH_SALT', 'F{:3cG>~gbmlt93=#V:0i9s)_0`_[=4iXc=r^qFtOqIC~Nu7FCo>8b,?^}Ee5hzU' );
define( 'LOGGED_IN_SALT',   'zIWFY{eQB*8>3X`s _;tnFGAmV|J5>s{YqrY)<-=|v~*tELOMsCE7p8e7xvI5hEo' );
define( 'NONCE_SALT',       '$Dmvo[NZ*4=s;3Ry)NnGFlCh+a/]is^&Tx5#{v)!),z/N|v^C!>(A>8X+WsEH}Q9' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'jdle_';

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
