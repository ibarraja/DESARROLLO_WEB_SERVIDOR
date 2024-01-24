<?php

session_start();

require_once('./modelo.php');
require_once('./funciones.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email = recoge('email');
    $pass = recoge('password');

    // Comprobaciones:
    if ($pass == null or $email == null) {
        $_SESSION["errorLoginPass"] = "Los campos no pueden estar vacios";
        header("Location: login.php");
        return;
    }

    $usuario = comprobar($email,$pass);
    
    
    // var_dump($email, $pass); 
    // var_dump($usuario); 
    
    if ($usuario == null) {
        $_SESSION["errorLoginPass"] = "Credenciales inválidas";
        header("Location: login.php");
        return;
    } else {
        unset($_SESSION["errorLoginPass"]);
        $_SESSION['user'] = $usuario;
        header("Location: perfil.php");
        return;
    }
}