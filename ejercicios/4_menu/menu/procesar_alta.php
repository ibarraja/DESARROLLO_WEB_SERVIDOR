<?php

session_start();

require_once('modelo.php');
require_once('funciones.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nombre = recoge('nombre');
    $apellidos = recoge('apellidos');
    $email = recoge('email');
    $password = recoge('password');
    $password2 = recoge('password2');

    $_SESSION['usuario']['nombre'] = $nombre;
    $_SESSION['usuario']['apellidos'] = $apellidos;
    $_SESSION['usuario']['email'] = $email;
    $_SESSION['usuario']['password'] = $password;
    $_SESSION['usuario']['password2'] = $password2;

    if($_FILES['fichero']['error'] == UPLOAD_ERR_OK){
        $nombreFichero = $_FILES['fichero']['name'];
        // $tamBytes = $_FILES['fichero']['size'];
    } else {
        print('no hay fichero');
    }

    //Comprobacion de errores:

    $_SESSION['dataOK'] = true;

        //Email:
    if(!str_contains($email, '@') || !str_contains($email, '.')){
        $_SESSION['errorEmail'] = 'ERROR: email no es válido';
        $_SESSION['dataOK'] = false;
    } elseif (usuarioExistente($email)){
        $_SESSION['errorEmail'] = 'ERROR: ya existe un usuario con este email';
        $_SESSION['dataOK'] = false;
    } else {
        unset($_SESSION['errorEmail']);
    }
    
        //Password:
    if($password !== $password2){
        $_SESSION['errorPass'] = 'ERROR: Las contraseñas no coinciden';
        $_SESSION['dataOK'] = false;
    } else {
        unset($_SESSION['errorPass']);
    }

        //Imagen:
    if ($_FILES['fichero']['error'] == UPLOAD_ERR_OK) {
        $nombreFichero = $_FILES['fichero']['name'];
        $uploadDir = '../bbdd/';
        $uploadedFile = $uploadDir . basename($nombreFichero);
    
        if (move_uploaded_file($_FILES['fichero']['tmp_name'], $uploadedFile . $_FILES['fichero']['name'])) {
            unset($_SESSION['errorFichero']);
        } else {
            $_SESSION['errorFichero'] = "ERROR: no se ha podido subir el archivo $nombreFichero";
            $_SESSION['dataOK'] = false;
        }
    }
    //Registar nuevo Usuario
    if($_SESSION['dataOK'] == true){
        
        //Creacion de un nuevo Usuario:
        $usuario = new Usuario;
        $usuario -> nombre = $nombre;
        $usuario -> apellidos = $apellidos;
        $usuario -> email = $email;

            //codificación de contraseña:
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $usuario -> password = $passwordHash;
            
            //registar Imagen:
        if ($_FILES["fichero"]["error"] == UPLOAD_ERR_OK) {
            $usuario->imagen = $nombreFichero;
        }


        //Recuperación lista usuarios:
        $listaUsuarios = [];
        $file = '../bbdd/data.json';

        $jsonData = file_get_contents("./{$file}");
        $listaUsuarios = json_decode($jsonData);

        //Añadir el Usuario a la lista:
        array_push($listaUsuarios, $usuario);

        //Sobreescribir el data.json:
        $jsonActualizado = json_encode($listaUsuarios, JSON_PRETTY_PRINT);
        file_put_contents($file, $jsonActualizado);

        //Creación de Cookies:
        setcookie("ultimo_usuario", $usuario->email, time() + 3600*24*10, '/');
        $fechaYHora = date("d-m-y H:i:s");
        setcookie("ultimo_usuario_fecha", $fechaYHora, time() + 3600*24*10, '/');

        unset($_SESSION['usuario']);
    }
}

header('Location: alta.php');