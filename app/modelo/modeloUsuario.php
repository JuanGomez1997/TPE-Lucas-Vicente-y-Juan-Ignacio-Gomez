<?php

require_once "modelo.php";

class ModeloUsuario extends Modelo {
    protected $db;

    function otenerPorNombre($nombre_usuario) {
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE nombre_usuario = ?');
        $query->execute([$nombre_usuario]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

}