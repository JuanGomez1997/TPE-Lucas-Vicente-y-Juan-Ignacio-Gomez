<?php
require_once './app/controlador/controladorAut.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$accion = 'login'; //accion por defecto
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
}

$params = explode('/', $accion); //parseo la accion de los parametros
    
switch ($params[0]) {
	case ('login'):
        $controlador = new ControladorAut();
		$controlador->mostrarLogin();
		break;
    case 'aut':
        $controlador = new ControladorAut();
        $controlador->aut();
    default: 
        echo "404 Page Not Found";
        break;    
}