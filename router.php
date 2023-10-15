<?php
require_once './app/controlador/controladorAut.php';
require_once './app/controlador/controladorLibros.php';
require_once './app/controlador/controladorGeneros.php';
require_once './app/helpers/helperAut.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$accion = 'inicio'; //accion por defecto
if (!empty($_GET['accion'])) {
    $accion = $_GET['accion'];
}

// inicio       ->          controladorLibros->mostrarLista();
// libro/:ID    ->          controladorLibros->mostrarLibro($id);
// login        ->          controladorAut->mostrarLogin();
// aut          ->          controladorAut->aut();

$params = explode('/', $accion); //parseo la accion de los parametros
    
switch ($params[0]) {
    case ('inicio'):
        $controlador = new ControladorLibros();
        $controlador->mostrarLista();
        break;
	case ('login'):
        $controlador = new ControladorAut();
		$controlador->mostrarLogin();
		break;
    case 'aut':
        $controlador = new ControladorAut();
        $controlador->aut();
        break;
    case 'logout':
        $controlador = new ControladorAut();
        $controlador->logout();
        break;
    case ('libro'):
        $controlador = new ControladorLibros();
        $controlador->mostrarLibroId($params[1]);
        break;
    case ('aniadirLibro'):
        $controlador = new ControladorLibros();
        $controlador->aniadirLibro();
        break;
    case ('editarLibro'):
        $controlador = new ControladorLibros();
        $controlador->editarLibro($params[1]);
        break;
    case ('eliminarLibro'):
        $controlador = new ControladorLibros();
        $controlador->eliminarLibro($params[1]);
        break;
    case 'vergeneros':
        $controlador = new ControladorGeneros();
        $controlador->listarGeneros();
        break;
    case 'agregargenero':
        $controlador = new ControladorGeneros();
        $controlador->agregarGenero();
        break;
    case 'librosporgenero':
        $id = $params[1];
        $controlador = new ControladorGeneros();
        $controlador->listarLibrosporGenero($id);
        break;
    case 'editargenero':
        $id = $params[1];
        $controlador = new ControladorGeneros();
        $controlador->editarGenero($id);
        break;
    case 'eliminargenero':
        $id = $params[1];
        $controlador = new ControladorGeneros();
        $controlador->eliminarGeneroLista($id);
        break;
    default: 
        echo '<h1> 404 Page Not Found </h1>';
        break;
}