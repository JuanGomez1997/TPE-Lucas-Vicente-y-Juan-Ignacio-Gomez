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

// inicio               ->      controladorLibros->mostrarLista();                  ->      accesible siempre desde el nav
// libro/:Id            ->      controladorLibros->mostrarLibro($id);               ->      accesible siempre clickeando el titulo desde el inicio
// aniadirLibro         ->      controladorLibros->aniadirLibro();                  ->      accesible si se está logeado desde el inicio
// eliminarLibro/:Id    ->      controladorLibros->eliminarLibro($id);              ->      accesible si se está logeado desde libro/:id
// editarLibro/:Id      ->      controladorLibros->editarLibro($id);                ->      accesible si se está logeado desde libro/:Id

// generos              ->      controladorGeneros->listarGeneros();                ->      accesible siempre desde el nav
// genero/:Id           ->      controladorGeneros->listarLibrosporGenero($id);     ->      accsesible siempre clickeando el genero desde generos
// agregargenero        ->      controladorGeneros->agregarGenero();                ->      accesible si se está logeado desde generos
// eliminargenero/id    ->      controladorGeneros->eliminarGenero($id);            ->      accesible si se está logeado desde generos
// editargenero/:Id     ->      controladorGeneros->editarGenero($id);              ->      accesible si se está logeado desde genero/:Id

// deafult              ->      controladorAut->mostrar404();                       ->      accesible si se entra a una página que no existe
// login                ->      controladorAut->mostrarLogin();                     ->      accesible si no está logeado desde el nav
// logout               ->      controladorAut->logout();                           ->      accesible si se está logeado desde el nav
// aut                  ->      controladorAut->aut();   

$params = explode('/', $accion); //parseo la accion de los parametros

switch ($params[0]) {
    case 'inicio':
        $controlador = new ControladorLibros;
        $controlador->mostrarLista();
        break;
    case 'libro':
        $controlador = new ControladorLibros;
        $controlador->mostrarLibroId($params[1]);
        break;
    case 'agregarLibro':
        $controlador= new ControladorLibros;
        $controlador->agregarLibro();
        break;
    case 'eliminarLibro':
        $controlador = new ControladorLibros;
        $controlador->eliminarLibro($params[1]);
        break;
    case 'editarLibro':
        $controlador = new ControladorLibros;
        $controlador->editarLibro($params[1]);
        break;
    case 'generos':
        $controlador = new ControladorGeneros;
        $controlador->listarGeneros();
        break;
    case 'genero':
        $controlador = new ControladorGeneros();
        $controlador->listarLibrosporGenero($params[1]);
        break;
    case 'agregarGenero':
        $controlador = new ControladorGeneros;
        $controlador->agregarGenero();
        break;
    case 'eliminarGenero':
        $controlador = new ControladorGeneros();
        $controlador->eliminarGenero($params[1]);
        break;    
    case 'editarGenero':
        $controlador = new ControladorGeneros();
        $controlador->editarGenero($params[1]);
        break;    
    case 'login':
        $controlador = new ControladorAut;
        $controlador->mostrarLogin();
        break;
    case 'aut':
        $controlador = new ControladorAut;
        $controlador->aut();
        break;
    case 'logout':
        $controlador = new ControladorAut;
        $controlador->logout();
        break;
    default: 
        $controlador = new ControladorAut();
        $controlador->mostrar404();
        break;
}