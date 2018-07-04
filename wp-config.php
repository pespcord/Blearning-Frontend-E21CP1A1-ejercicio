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
define('DB_NAME', 'clase_22');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'WT~@T:SlP(@A%=^>naY[mj#0RZrF}NY[Y2G)z:]VU36`=@0o8FQF_er<tvw/(Tn<');
define('SECURE_AUTH_KEY', ',jEU3X^9U%UQwJ<RYk~auu#e:hPbI@[R+P-%X5y^Y2hBjlKoE|-YgV^Pjb8Z!ek8');
define('LOGGED_IN_KEY', 'q-`QT{&O3YYL0|YTg$CpqBo-RyZL+]n44IYE4<_B-v?SNl0] ){jJqs37^rbET7|');
define('NONCE_KEY', 'Mn8#sq,NDUddK<,RnKQ<(,@qn#}~+}>-`8;MAfi3In_h2iI 7K%9.p<,;xa.8~e#');
define('AUTH_SALT', '<AOn/!AB[`#;f639 /hvO`IqEffK~n@JW}ak_m_65k3D&hROX$V_-9_/M?X=w1{t');
define('SECURE_AUTH_SALT', '|nPm}AH;HJm#OTk2S@<H/<qPhWO4X+@e l!Z0!NziEH&ZVg6~eOdh5^*d9@5kR?Z');
define('LOGGED_IN_SALT', '/zc 4f*;ZfVNYDB7!fQgz^01@MuQU,eRNjjlhzpjaCu^N?RWC7^!Yt)SCJ93ek=~');
define('NONCE_SALT', '{SGaX4j/C$:/I qr EM0lYUv@Zmd9YtNX3)ldRMo;GDKLl}r=3ToPh$C-D?]0<9!');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'cl_';


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

