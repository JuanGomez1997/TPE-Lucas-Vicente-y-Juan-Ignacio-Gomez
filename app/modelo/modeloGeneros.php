<?php
    class ModeloGeneros{
        private $db_bibliotea;
        public function __construct(){
            $this->db_bibliotea = new PDO('mysql:host=localhost;'.'dbname=biblioteca;charset=utf8', 'root', '');
        }
       //obtengo los generos para mostrar
       public function obtenerGeneros(){
            $query = $this->db_bibliotea->prepare("SELECT * FROM generos");
            $query->execute();
            $generos = $query->fetchAll(PDO::FETCH_OBJ);
            return $generos;
        }

       //obtengo los generos para mostrar por id
       public function obtenerGenerosId($id){
            $query = $this->db_bibliotea->prepare("SELECT * FROM libros JOIN generos ON libros.genero=generos.id_genero WHERE generos.id_genero=?");
            $query->execute([$id]);
            $generos = $query->fetchAll(PDO::FETCH_OBJ);
            return $generos;
        }  

        //agregar generos nuevos
        public function agregarGenero($genero){
            $query = $this->db_bibliotea->prepare("INSERT INTO generos(nombre) VALUES (?)");
            $query->execute([$genero]);
            return $this->db_bibliotea->lastInsertId();
        }
        //eliminar generos
        public function eliminarGenero($id){
            $query = $this->db_bibliotea->prepare("DELETE FROM generos WHERE id_genero=?");
            $query->execute([$id]);
        }
        //modifico un genero existentes
        public function actualizarGenero($genero,$id){
            $query = $this->db_bibliotea->prepare("UPDATE generos SET nombre=? WHERE (generos.id_genero=?)");
            $query->execute([$genero,$id]);
        }


    }