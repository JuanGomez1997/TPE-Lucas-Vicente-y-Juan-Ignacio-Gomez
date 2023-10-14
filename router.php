<?php
    require_once './app/controlador/controladorAut.php';
    require_once './app/controlador/controladorGeneros.php';

    define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

    $accion = 'login'; //accion por defecto
    if (!empty($_GET['accion'])) {
        $accion = $_GET['accion'];
    }

    // inicio       ->          controladorInicio->mostrarInicio();
    // login        ->          controladorAut->mostrarLogin();
    // aut          ->          controladorAut->aut();

    $params = explode('/', $accion); //parseo la accion de los parametros
    $controladorGenero= new ControladorGeneros;
        
    switch ($params[0]) {
        /* case ('inicio'):
            $controlador = new ControladorInicio();
            $controlador->mostrarInicio();
            break; */
        case ('login'):
            $controlador = new ControladorAut();
            $controlador->mostrarLogin();
            break;
        case 'aut':
            $controlador = new ControladorAut();
            $controlador->aut();
            break;
        case 'vergeneros';
            $controladorGenero->listarGeneros();
            break;
        case 'agregargenero';
            $controladorGenero->agregarGenero();
            break;
        case 'librosporgenero';
            $id=$params[1];
            $controladorGenero->listarLibrosporGenero($id);
            break;
        case 'editargenero';
            $id=$params[1];
            $controladorGenero->editarGenero($id);
            break;
        case 'eliminargenero';
            $id=$params[1];
            $controladorGenero->eliminarGeneroLista($id);
            break;
        default: 
            echo '<h1> 404 Page Not Found </h1>';
            break;
}