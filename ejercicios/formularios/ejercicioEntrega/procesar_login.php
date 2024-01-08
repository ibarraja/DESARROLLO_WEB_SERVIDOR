<?php

session_name("alta");
session_start();

include 'modelo.php';
include './util/funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $email = recoge("email");
    $password = recoge("password");
    $pasword = password_hash($password, PASSWORD_DEFAULT);
    
    // Leer usuarios existentes desde el archivo JSON
    $file = "./bbdd/data.json";
    $usuarios = [];
    if (file_exists($file)) {
        $usuarios = json_decode(file_get_contents($file), true);
    }
    //Creo variables de sesion para recoger los errores:
    $_SESSION['errors'] = [];

    // Verificar si el correo electrónico ya está registrado
    $userRegister= false;
    $error;
    foreach ($usuarios as $usuario) {
        if ($email === $usuario["email"]) {
            if ($password === $usuario["password"]) {
                $userRegister=true;
            } else {
                $_SESSION["errors"][] = "Contraseña incorrecta";
                $error = "Contraseña incorrecta";
            }
        } else {
            $_SESSION["errors"][] = "Email incorrecto";
            $error = "Email incorrecto";
        }
    }
    if ($userRegister) {
        print"Bienvenido";
        header("Location: index.html");
        exit();
    }else{
        print"$error";
    }
} else {
    print "Acceso no autorizado.";

    print "<p><a href='./alta.php'>Volver a alta.php</a></p>";
}
// session_write_close();
?>
