<?php

//Usar AutHelper::verify(); para restringir cosas a usuarios no loggeados

require_once './app/vista/vistaAut.php';
require_once './app/modelo/modeloUsuario.php';

Class ControladorAut {
    private $vista;
    private $modelo;

    function __construct() {
        $this->modelo = new ModeloUsuario();
        $this->vista = new VistaAut();
    }

    public function mostrarLogin() {
        $this->vista->mostrarLogin();
    }

    public function aut() {
        $nombre_usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];

        if (empty($nombre_usuario) || empty($contrasenia)) {
            $this->vista->mostrarLogin('faltan campos por completar');
            return;
        }

        $usuario = $this->modelo->otenerPorNombre($nombre_usuario);
        if ($usuario && password_verify($contrasenia, $usuario->contrasenia)) {
            
            AutHelper::login($usuario);

            header('location: ' . BASE_URL);
        }
        else {
            $this->vista->mostrarLogin('Usuario inválido');
        }
    }
}