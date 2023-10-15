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

$controladorGenero= new ControladorGeneros;
$controladorLibro= new ControladorLibros;
$controladorAut= new ControladorAut;



$params = explode('/', $accion); //parseo la accion de los parametros
    
switch ($params[0]) {
    case ('inicio'):
        $controladorLibro->mostrarLista();
        break;
	case ('login'):
		$controladorAut->mostrarLogin();
		break;
    case 'aut':
        $controladorAut->aut();
        break;
    case 'logout':
        $controladorAut->logout();
        break;
    case ('libro'):
        $controladorLibro->mostrarLibroId($params[1]);
        break;
    case ('aniadirLibro'):
        $controladorLibro->aniadirLibro();
        break;
    case ('editarLibro'):
        $controladorLibro->editarLibro($params[1]);
        break;
    case ('eliminarLibro'):
        $controladorLibro->eliminarLibro($params[1]);
        break;
    case 'vergeneros':
        $controladorGenero->listarGeneros();
        break;
    case 'agregargenero':
        $controladorGenero->agregarGenero();
        break;
    case 'librosporgenero':
        $id = $params[1];
        $controladorGenero->listarLibrosporGenero($id);
        break;
    case 'editargenero':
        $id = $params[1];
        $controladorGenero->editarGenero($id);
        break;
    case 'eliminargenero':
        $id = $params[1];
        $controladorGenero->eliminarGeneroLista($id);
        break;
    default: 
        echo '<h1> 404 Page Not Found </h1>';
        break;
}