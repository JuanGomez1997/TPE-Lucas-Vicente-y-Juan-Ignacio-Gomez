<?php
    require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
    class VistaGeneros{
        private $smarty;
        
        public function __construct() {
            AutHelper::verify();
            $this->smarty = new Smarty(); 
        }
        public function mostrarListaGeneros($generos){
            $this->smarty->assign('generos', $generos);
            $this->smarty->assign('opcion', 'agregar');
            $this->smarty->assign('_SESSION', $_SESSION);
            $this->smarty->display('listadoGeneros.tpl');
        }

        public function mostrarListaGenerosID($id, $generos, $libros){
            $this->smarty->assign('id', $id);
            $this->smarty->assign('generos', $generos);
            $this->smarty->assign('libros', $libros);
            $this->smarty->assign('opcion','editar');
            $this->smarty->assign('_SESSION', $_SESSION);
            $this->smarty->display('listado_por_genero.tpl');
        }

        public function mostrarError(){
            $this->smarty->assign('error','No se puede eliminar porque en este genero hay libros, si aun quiere eliminar este genero tendra que cambiar el genero y/o eliminar dichos libros');
            $this->smarty->assign('_SESSION', $_SESSION);
            $this->smarty->display('error.tpl');
        }
    }