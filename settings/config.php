<?php

// ----------------------------
// Configuración del entorno
// ----------------------------

define('ENVIRONMENT', 'Development'); // Cambiar a 'Production' en producción

if (ENVIRONMENT === 'Development') {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}



// ----------------------------
// Configuración de la base de datos
// ----------------------------
define('DB_HOST', 'db-gestionescolar.cvfdadg7dmyd.us-east-1.rds.amazonaws.com'); // Ej: db-gestion-escolar.cvfdadg7dmyd.us-east-1.rds.amazonaws.com
define('DB_NAME', 'db-gestionescolar');               // Base creada en RDS
define('DB_USER', 'root');                           // Usuario RDS
define('DB_PASSWORD', 'root123456');              // Contraseña RDS


// ----------------------------
// Configuración de las rutas
// ----------------------------

define('NAME_APP', 'sistema-gestion-escolar-php-mysql-desde-cero');

// Corrige la ruta base, subiendo dos niveles desde el directorio actual
define('BASE_PATH', realpath(__DIR__ . '/../..'));

// Rutas a componentes, carpetas y archivos usando la ruta base corregida
define('BASE_PATH_COMPONENTS', BASE_PATH . '/components');
define('SETTINGS_BD', BASE_PATH . '/config/settingBD.php');

// URL base para acceder desde el navegador (usa servidor real en vez de localhost)
define('BASE_HOME', 'http://' . $_SERVER['SERVER_NAME'] . '/' . NAME_APP . '/');
define('BASE_STATIC', 'http://' . $_SERVER['SERVER_NAME'] . '/' . NAME_APP . '/');


define('BASE_PATH_AVATAR_PROFESORES', BASE_PATH . '/assets/avatar_profesores');
define('BASE_PATH_AVATAR_ESTUDIANTES', BASE_PATH . '/assets/avatar_estudiantes');   

// -------------------------------
// Lista de Bases Controllers ----
// -------------------------------
define('CONTROLLER_GLOBAL', BASE_PATH . 'controllers/ControllerGlobal.php');
define('BASE_CONTROLLER_MATERIAS', BASE_PATH . 'controllers/ControllerMaterias.php');
define('BASE_CONTROLLER_PROFESORES', BASE_PATH . 'controllers/ControllerProfesores.php');
define('BASE_CONTROLLER_ESTUDIANTES', BASE_PATH . 'controllers/ControllerEstudiantes.php');
define('BASE_CONTROLLER_GRADOS', BASE_PATH . 'controllers/ControllerGrados.php');
define('COMPONENTES_GLOBALES', BASE_PATH . 'components/components.php');

// -------------------------------
// Rutas Controllers POST --------
// -------------------------------
define('POST_FORM_CURSO', 'http://' . $_SERVER['SERVER_NAME'] . '/' . NAME_APP . '/controllers/ControllerGrados.php');
define('POST_FORM_MATERIA', 'http://' . $_SERVER['SERVER_NAME'] . '/' . NAME_APP . '/controllers/ControllerMaterias.php');
define('POST_FORM_PROFESOR', 'http://' . $_SERVER['SERVER_NAME'] . '/' . NAME_APP . '/controllers/ControllerProfesores.php');
define('POST_FORM_ESTUDIANTE', 'http://' . $_SERVER['SERVER_NAME'] . '/' . NAME_APP . '/controllers/ControllerEstudiantes.php');

// ----------------------------
// Configuración de zona horaria
// ----------------------------
date_default_timezone_set('America/Bogota');

// ----------------------------
// Otras configuraciones comunes
// ----------------------------
define('SESSION_TIMEOUT', 3600); // Tiempo de expiración de la sesión en segundos (1 hora)