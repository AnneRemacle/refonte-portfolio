<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'anneremanm2707');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'anneremanm2707');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Uju2Dqa2');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'anneremanm2707.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

define ( 'WPCF7_AUTOP', false );

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F;xM^u/MwA}hf%PHjk+h=mV$LYCI#&oSYV|]9pNLF0eqr|CMp;ICR`+qq[QW)j;W');
define('SECURE_AUTH_KEY',  'v1yd-_i9.eFS4|``v)jkA?uPj=M?-K*4Odz;x0O5f}M^}QoaDcsIJ,(z5De{S;~x');
define('LOGGED_IN_KEY',    'LM^l-kHR;#w|DL=_zTxQg*}aie{|r[pv-G:cfVS/AO%!$bSW4Wh%#IDEIaKM[|oU');
define('NONCE_KEY',        'rgRXt|E2ICKFfP-]y&&Vrv>u|p+F_Z)h}Z]&S&f~E1j ;}OZ::v``Y)w|Zn}nF`y');
define('AUTH_SALT',        '~Ccn1$UAS4npT$8N_oW{WM~.+)6}=9GXM);H+rU2D~_c`pPduEN/K+-Q24H]FTG ');
define('SECURE_AUTH_SALT', '=-vf:Y)k;9|-R02d1iQ]GlV&wX3/xwQ@9||qSZ(XL3e-@EHy]R4/{@$!b[PwiKY-');
define('LOGGED_IN_SALT',   'fhUAjxmlqy(rn5*8AETv@`;I,r7xt||N-J|I=*4PQ b@T}|f9AH9q&%x1RLA~-*F');
define('NONCE_SALT',       '?+R4F7#zP|7]-jTEm#OOV+R./eIUrj]WtT9/I0HV_Y<TEd5Mc]=VdmY9DX*!g o6');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');