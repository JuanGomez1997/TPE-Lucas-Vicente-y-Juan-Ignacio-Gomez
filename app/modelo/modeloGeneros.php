<?php
class ModeloGeneros {
    private $db;
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=biblioteca;charset=utf8', 'root', '');
    }

    //obtengo los generos para mostrar
    public function obtenerGeneros() {
        $query = $this->db->prepare("SELECT * FROM generos");
        $query->execute();
        $generos = $query->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }

    //obtengo los generos para mostrar por id
    public function obtenerGeneroId($id) {
        $query = $this->db->prepare('SELECT * FROM generos WHERE id_genero=?');
        $query->execute([$id]);
        $genero = $query->fetchAll(PDO::FETCH_OBJ);
        return $genero;
    }  

    //agregar generos nuevos
    public function agregarGenero($genero) {
        $query = $this->db->prepare('INSERT INTO generos(genero) VALUES (?)');
        $query->execute([$genero]);
        return $this->db->lastInsertId();
    }

    //eliminar generos
    public function eliminarGenero($id) {
        $query = $this->db->prepare('DELETE FROM generos WHERE id_genero=?');
        $query->execute([$id]);
    }

    //modifico un genero existentes
    public function actualizarGenero($genero,$id) {
        $query = $this->db->prepare('UPDATE generos SET genero=? WHERE generos.id_genero=?');
        $query->execute([$genero, $id]);
    }

}