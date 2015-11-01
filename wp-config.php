<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '@JQ+2bXC>HTJt_a-._K*0LDk^|0h}B++zl^9R6k@4B6|^?VFopw;Sktjww-Qc7oQ');
define('SECURE_AUTH_KEY',  'IT[=^ez;_~wMK{3XO|(i-vy/_Uz(ua`yVh1snzZNQD+3;@14`&o-sPu5d|>*sdj3');
define('LOGGED_IN_KEY',    '3<5{J0H#+T@KA< [~[l]!@dR|+A9Y(s @jR^ H0$ARbHAp@#D1z~=DS3l+e/-?0/');
define('NONCE_KEY',        ':U,C_pQUY;R-z?w~N<:Q@_=q54-[{Q#yQ4`gf)?<:FId(u!kHEPNx-LTF6MREf.5');
define('AUTH_SALT',        'aW_(iz@Nz*`1!;7eHW^PCJ=+XOv=Kn^Rz)Ot?(4_lII+fG.I<j!qVS+hGpN?zH=*');
define('SECURE_AUTH_SALT', 'sT%lB+4]eQb$$R|&b[Y$_!6ua.C2`NwNQB}H+95CZM)*a6*%3F+N?{+Qr>XB!;$}');
define('LOGGED_IN_SALT',   '|NXUDv)/KIBB]t.{`Zb H2=QofC*I*M+j[Vo|#R Wjfj9zr|d C(3gd|8d.@IV>K');
define('NONCE_SALT',       ';T>-+L-<s6I6*C;oXSu&4)0Tlu.,J/f~D<hic;`lDTO.z+0<t550((p!5Uce}2zD');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');