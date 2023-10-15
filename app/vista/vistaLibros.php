<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class VistaLibros {
    private $smarty;

    public function __construct() {
        AutHelper::verify();
        $this->smarty = new Smarty();
    }

    public function mostrarLista($libros, $generos, $error = null) {
        $this->smarty->assign('libros', $libros);
        $this->smarty->assign('generos', $generos);
        $this->smarty->assign('error', $error);
        $this->smarty->assign('_SESSION', $_SESSION);
        $this->smarty->display('listaLibros.tpl');        
    }

    public function mostrarLibroId($id, $libros, $generos, $error = null){
        $this->smarty->assign('id', $id);
        $this->smarty->assign('libros', $libros);
        $this->smarty->assign('generos', $generos);
        $this->smarty->assign('error', $error);
        $this->smarty->assign('_SESSION', $_SESSION);
        $this->smarty->display('libroId.tpl');
    }

    public function mostrarError($error) {
        $this->smarty->assign('error', $error);
        $this->smarty->assign('_SESSION', $_SESSION);
        $this->smarty->display('error.tpl');
    }
    
}