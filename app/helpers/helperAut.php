<?php

class AutHelper {

    public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($usuario) {
        AutHelper::init();
        $_SESSION['USER_ID'] = $usuario->id;
        $_SESSION['USER_NOMBRE_USUARIO'] = $usuario->nombre_usuario; 
    }

    public static function verify() {
        AutHelper::init();
        if (!isset($_SESSION['USER_ID'])) {
            header('Location: ' . BASE_URL . '/login');
            die();
        }
    }
}