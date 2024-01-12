<?php


// ###### FUNCION RECOGER
// Función que recoge los datos de los formularios y los deoura para no meter código fuente

function recoge($var){
    if(isset($_request[$var])){
        if ($_REQUEST[$var] != ""){
            $tmp = trim(htmlspecialchars(strips_tags($_REQUEST[$var])));
            return $tmp;
        }
    }
    return null;
}

// ###### FUNCION CHECKUSER
// Función para comprobar las credenciales de un usuario

function checkuser($user, $password){
    $lista_usuarios = [];
    
}