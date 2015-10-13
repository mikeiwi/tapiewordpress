<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
// mysql://b6c461fd6d3c8e:ad6c7655@us-cdbr-iron-east-03.cleardb.net/heroku_a93d86c5c55e2a6?reconnect=true
define('DB_NAME', 'heroku_a93d86c5c55e2a6');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'b6c461fd6d3c8e');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'ad6c7655');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/*
define('DB_NAME', 'tapie');

define('DB_USER', 'root');

define('DB_PASSWORD', 'root');

define('DB_HOST', 'localhost');

define('DB_CHARSET', 'utf8mb4');

define('DB_COLLATE', ''); */

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '`C|7ubBgHTGAG<2 psfu:85a9lcGrU`,vs-Qg3d1XK^E2yM9m<aZ*U|T 8GP~^{w');
define('SECURE_AUTH_KEY', '6#i9^Pg2d@-jb/K%NPE|f:v^R>0,Y-[L_[c+=ld@VP(lt!ro*CA{a?d2@f98x(fn');
define('LOGGED_IN_KEY', 'C?7[{&lO<:PE|JxPxK|iIQuw8:lt$+YWRkTr`<TjVG}g`|#3tIcd;r|}Xmh)aoK&');
define('NONCE_KEY', 'XA9q;Q2D@-,@=3O<ye-ASZ!l1+[},4F;lT?Yf~VS+Q|),5T~YNI`0!9>]|6C)(aG');
define('AUTH_SALT', '`O<jX4&{sm^kMx>u<3,YRxY5E|*Geh;fa73F<;0>yj0+_Htk2C;6ay)rcfnNs+~a');
define('SECURE_AUTH_SALT', 'HsSmM{N&:oyXpvhR)S3g$x8I;}U-cYZW/}D;OFVA5&)+X-xodWj52%/2>|;;zywa');
define('LOGGED_IN_SALT', 'ccai#Ag2%-@SL5rAh_ *{u-ZW>uv>slt,H|x!Az[y&4Yg1aVM.@*-3Re?!m{nfob');
define('NONCE_SALT', 'x~9S3Mh<2Hj:J;gtIQck-iU4Dc|O98%Nr{#Ea`e}hK9aSr_T/|D||j3f+27<4h3|');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

