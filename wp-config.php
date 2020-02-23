<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*S;8eEt4}a?7cXc(sIO(*4>!;MmN,8X_ts#RBBQkJ>o[$!zzm+w$Ua8J{ >Yn~58' );
define( 'SECURE_AUTH_KEY',  '#yQ18r~]yXg-vPg%^B8i)_i!lBfBI`H2c>s~|^QcEq|`ghNjdaI;OZ+qCSh4cGbY' );
define( 'LOGGED_IN_KEY',    '7VLkhj|fXEqOEWk-:^46glXP)t![x~&P{##z(7m B~pa:.>W8xn,M[VUW#33h!+)' );
define( 'NONCE_KEY',        '{n%jj|.imDY6(hi-tUH1CQU*TE1_nug9=I)jQmX1wm1Xo`Y}K2;|IMb4tP,M!^v^' );
define( 'AUTH_SALT',        'Ft};1ED;#RZg[F6BiS/kxK_gvxq;&1>Rl)+@5Qyo_=N([1Lt2ww*`up;Di>Wo,Un' );
define( 'SECURE_AUTH_SALT', '{^NP:&4fz+HrbX4WZ#99Wb;PQSzY#[?D.mKy85VL9h6Y%15TDk},RB-g`@&JqyN&' );
define( 'LOGGED_IN_SALT',   's2-?[&71c#|B-$rbu0JB1JXJecYaR45v6w)VP+=)T%>-:IoGAjgb9@n`<@)@&3!&' );
define( 'NONCE_SALT',       'PV*-4SVxI<k,vx%B.v/W|-blqU{9S8|h3i3%Y;dhAAik~sYlN?3$9#: (V7WuI*)' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
