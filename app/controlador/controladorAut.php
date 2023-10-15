<?php

//Usar AutHelper::verify(); para restringir cosas a usuarios no loggeados

require_once './app/vista/vistaAut.php';
require_once './app/modelo/modeloUsuario.php';
require_once './app/helpers/helperAut.php';

Class ControladorAut {
    private $vista;
    private $modelo;

    function __construct() {
        $this->vista = new VistaAut();
        $this->modelo = new ModeloUsuario();
    }

    public function mostrarLogin() {
        $this->vista->mostrarLogin();
    }

    public function aut() {
        $nombre_usuario = $_POST['nombre_usuario'];
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

    public function logout() {
        AutHelper::logout();
        header('Location: ' . BASE_URL);    
    }
}