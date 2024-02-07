<?php


function recoge($var){
    if($_REQUEST[$var] != ''){
        $tmp = trim(htmlspecialchars(strip_tags($_REQUEST[$var])));
        return $tmp;
    }
    return null;
}

function comprobar($email, $pass){

    //Recuperar la lista de usuarios:
    $lista_usuarios = [];
    $file = './bbdd/data.json';

    $jsonData = file_get_contents("./{$file}", FILE_USE_INCLUDE_PATH);
    $lista_usuarios = json_decode($jsonData);

    
    //Comprobación de usuarios:
    foreach($lista_usuarios as $usuario){
        //Decodificación de contraseña:
            $passwordDecodified = password_verify($pass, $usuario->password);


        if($usuario->email == $email and $passwordDecodified == true){
            $user = new Usuario;
            $user->nombre = $usuario->nombre;
            $user->apellidos = $usuario->apellidos;
            $user->email = $usuario->email;
            $user->password = $usuario->password;
            $user->imagen = $usuario->imagen;
            return $user;
            // return $usuario;
        }
    }
    return null;
}

function usuarioExistente($email){
    //Recuperar la lista de usuarios:
    $lista_usuarios = [];
    $file = './bbdd/data.json';

    $jsonData = file_get_contents("./{$file}", FILE_USE_INCLUDE_PATH);
    $lista_usuarios = json_decode($jsonData);

    //Comprobar si existe el usuario
    foreach($lista_usuarios as $usuario){
        if($usuario->email == $email){
            return true;
        }
    }
    return false;

}

function validarEmail($email){    
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}