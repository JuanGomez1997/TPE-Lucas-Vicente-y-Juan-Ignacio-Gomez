<?php

class AutHelper {

    public static function init() {
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($usuario) {
        AutHelper::init();
        $_SESSION['id_usuario'] = $usuario->id;
        $_SESSION['nombre_usuario'] = $usuario->nombre_usuario; 
    }

    public static function verify() {
        AutHelper::init();
    }

    public static function logout() {
        AutHelper::init();
        session_destroy();
    }   
    
}