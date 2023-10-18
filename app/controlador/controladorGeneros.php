<?php
require_once './app/modelo/modeloGeneros.php';
require_once './app/vista/vistaGeneros.php';
require_once './app/helpers/helperAut.php';

class ControladorGeneros {
    private $vista;
    private $modeloGeneros;
    private $modeloLibros;

    public function __construct() {
        AutHelper::verify();
        $this->vista = new VistaGeneros();
        $this->modeloGeneros = new ModeloGeneros();
        $this->modeloLibros = new ModeloLibros();
    }

    public function listarGeneros() {
        $generos = $this->modeloGeneros->obtenerGeneros();
        $this->vista->mostrarListaGeneros($generos);
    }

    public function listarLibrosporGenero($id) {
        $genero = $this->modeloGeneros->obtenerGeneroId($id);
        $libros = $this->modeloLibros->obtenerLibroGenero($id);
        $this->vista->mostrarListaGenerosID($id, $genero, $libros);
    }

    public function agregarGenero() {
        if (isset($_POST['genero'])){
            if (empty(['genero'])){
                $this->vista->mostrarError("Datos incompletos");
                return;
            }

        $genero = $_POST ['genero'];  
        $this->modeloGeneros->agregarGenero($genero);
        header("Location: " . BASE_URL."generos");
        
        }
    }
    
    public function editarGenero($id) {
        if (isset($_POST['genero'])) {
            if (empty(['genero'])) {
                $this->vista->mostrarError("Datos incompletos");
                return;
            }

        $genero = $_POST ['genero'];  
        $this->modeloGeneros->actualizarGenero($genero, $id);
        header("Location: " . BASE_URL . "generos");

        }
    }

    public function eliminarGenero($id) {
        try {
            $this->modeloGeneros->eliminarGenero($id);
            header("Location: " . BASE_URL . "generos");
        } catch(Exception $e) {
            $error = 'No se puede eliminar porque en este genero hay libros, si aun quiere eliminar este genero tendra que cambiar el genero y/o eliminar dichos libros';
            $this->vista->mostrarError($error);
        }
    }

}