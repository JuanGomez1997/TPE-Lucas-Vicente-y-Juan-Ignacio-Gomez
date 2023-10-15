<?php
require_once './app/modelo/modeloLibros.php';
require_once './app/vista/vistaLibros.php';
require_once './app/helpers/helperAut.php';
require_once './app/modelo/modeloGeneros.php';

class ControladorLibros {
    private $vista;
    private $modelo;
    private $modeloGeneros;

    function __construct () {
        AutHelper::verify();
        $this->modelo = new ModeloLibros();
        $this->vista = new VistaLibros();
        $this->modeloGeneros = new ModeloGeneros();
    }

    public function mostrarLista() {
        $libros = $this->modelo->obtenerLibros();
        $generos = $this->modeloGeneros->obtenerGeneros();
        $this->vista->mostrarLista($libros, $generos);
    }

    public function mostrarLibroId($id) {
        $libros = $this->modelo->obtenerLibroId($id);
        $generos = $this->modeloGeneros->obtenerGeneros();
        $this->vista->mostrarLibroId($id, $libros, $generos);
    }

    public function aniadirLibro() {
        
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $sinopsis = $_POST['sinopsis'];
        $anio = $_POST['anio'];
        $genero = $_POST['genero'];
        $precio = $_POST['precio'];

        if (empty($titulo) || empty($autor) || empty($sinopsis) || empty($anio) || empty($genero) || empty($precio)) {
            $this->vista->mostrarError("Falta completar un campo");         
            return;
        }

        $id = $this->modelo->insertarLibro($titulo, $autor, $sinopsis, $anio, $genero, $precio);
        if ($id) {
            //header('Location: ' . BASE_URL);
        }
        else {
            $this->vista->mostrarError("Error al intentar insertar el libro");
        }
    }

    public function editarLibro($id) {
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $sinopsis = $_POST['sinopsis'];
        $anio = $_POST['anio'];
        $genero = $_POST['genero'];
        $precio = $_POST['precio'];
        $disponibilidad = $_POST['disponibilidad'];

        if (empty($titulo) || empty($autor) || empty($sinopsis) || empty($anio) || empty($genero) || empty($precio)) {
            $this->vista->mostrarError("Falta completar un campo");         
            return;
        }

        $id = $this->modelo->editarLibro($titulo, $autor, $sinopsis, $anio, $genero, $precio, $disponibilidad, $id);
        if ($id) {
            header('Location: ' . BASE_URL);
        }
        else {
            $this->vista->mostrarError("Error al intentar editar el libro");
        }
    }

    public function eliminarLibro($id) {
        $this->modelo->eliminarLibro($id);
        header('Location: ' . BASE_URL);
    }
    
}
?>