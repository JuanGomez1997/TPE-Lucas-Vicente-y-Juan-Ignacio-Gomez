<?php

class ModeloUsuario {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8', 'root', '');
    }

    function otenerPorNombre($nombre_usuario) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE nombre_usuario = ?');
        $query->execute([$nombre_usuario]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

}