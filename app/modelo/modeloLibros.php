<?php

class ModeloLibros {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8', 'root', '');    
    }

    function obtenerLibros () {
        $query = $this->db->prepare('SELECT * FROM libros JOIN generos ON libros.genero=generos.id_genero');
        $query->execute();
        $libros = $query->fetchAll(PDO::FETCH_OBJ);
        return $libros;
    }

    public function obtenerLibroId ($id){
        $query = $this->db->prepare('SELECT * FROM libros JOIN generos ON libros.genero=generos.id_genero WHERE id=?');
        $query->execute([$id]);
        $libro = $query->fetchAll(PDO::FETCH_OBJ);
        return  $libro;
    }  

    public function InsertarLibro ($titulo, $autor, $sinopsis, $anio, $genero, $precio) {
        $query = $this->db->prepare('INSERT INTO libros (titulo, autor, sinopsis, anio, genero, precio, disponibilidad) VALUES (?, ?, ?, ?, ?, ?, ?)');
        $query->execute([$titulo, $autor, $sinopsis, $anio, $genero, $precio]);
        return $this->db->lastInsertId();
    }

    public function editarLibro ($titulo, $autor, $sinopsis, $anio, $genero, $precio, $disponibilidad, $id) {
        $query = $this->db->prepare('UPDATE libros SET titulo=?, autor=?, sinopsis=?, anio=?, genero=?, precio=?, disponibilidad=? WHERE (libro.id=?)');
        $query->execute([$titulo, $autor, $sinopsis, $anio, $genero, $precio, $disponibilidad, $id]);
    }

    public function eliminarLibro ($id) {
        $query = $this->db->prepare('DELETE FROM libros WHERE id=?');
        $query->execute([$id]);
    }

    

}