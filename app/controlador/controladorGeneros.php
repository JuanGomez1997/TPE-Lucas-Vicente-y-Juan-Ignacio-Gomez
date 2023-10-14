<?php
    require_once './app/modelo/modeloGeneros.php';
    require_once './app/vista/vistaGeneros.php';
    class ControladorGeneros{
        private $vistaGenero;
        private $modeloGenero;

        public function __construct(){
            $this->vistaGenero=new VistaGeneros ();
            $this->modeloGenero=new ModeloGeneros();
        }

        public function listarGeneros(){
            $generos=$this->modeloGenero->obtenerGeneros();
            $this->vistaGenero->mostrarListaGeneros($generos);
        }

        public function listarLibrosporGenero($id){
            $libros=$this->modeloGenero->obtenerGenerosId($id);
            $this->vistaGenero->mostrarListaGenerosID($libros);
        }

        public function agregarGenero(){
            if (isset($_POST['nombre'])){
                if (empty(['nombre'])){
                    echo 'Datos incompletos';
                    return;
                }
                $genero = $_POST ['nombre'];  
                $this->modeloGenero->agregarGenero($genero);
                header("Location: " . BASE_URL."vergeneros");
            }
            $this->vistaGenero->mostrarFormularioAgregarGenero();
        }
        public function editarGenero($id){
            if (isset($_POST['nombre'])){
                if (empty(['nombre'])){
                    echo 'Datos incompletos';
                    return;
                }
                $genero = $_POST ['nombre'];  
                $this->modeloGenero->actualizarGenero($genero,$id);
                header("Location: " . BASE_URL."vergeneros");
            }
            $this->vistaGenero->mostrarFormularioEditarGenero();
        }

        public function eliminarGeneroLista($id){
            try{
                $this->modeloGenero->eliminarGenero($id);
                header("Location: " . BASE_URL."vergeneros");
            }catch(Exception $e){
                $this->vistaGenero->estado($e);
            }

        }

    }