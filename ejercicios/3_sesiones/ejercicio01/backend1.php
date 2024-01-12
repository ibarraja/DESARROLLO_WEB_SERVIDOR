<?php


session_start();
session_name("mayusYminus");

// Accion borrar datos de sesion
if (isset($_POST['borrarDatos'])) {
    session_unset();
    session_destroy();
}

// Fujncion recoger (en principio tiene que estar tambien en utilidades) Lo he guardado, ya que he tenido problemas al llamarla
function recoge($var)
{
    if (isset($_POST[$var])) {
        if ($_POST[$var] != "") {
            $tmp = trim(htmlspecialchars(strip_tags($_REQUEST[$var])));
            return $tmp;
        }
    }
    return null;
}

//recojo las variables de el index:
$mayus = recoge("mayus");
$minus = recoge("minus");

//Las convierto en variables de sesion
$_SESSION["mayus"] = $mayus;
$_SESSION["minus"] = $minus;

//Comprobaciones de errores de Mayus
if(is_null($mayus)){
    $_SESSION["mayusError"] = "La cadena esta vacía";
} elseif(!ctype_upper($mayus)) {
    $_SESSION["mayusError"] = "La cadena no está en mayúsculas";
} else {
    unset($_SESSION["mayusError"]); //Si no hay ningun error, elimino la variable mayusError para no quedar registrado alguna variable de pruebas anteriores
}


//Comprobaciones de errores de Minus
if(is_null($minus)){
    $_SESSION["minusError"] = "La cadena esta vacía";
} elseif(!ctype_lower($minus)) {
    $_SESSION["minusError"] = "La cadena no está en minúsculas";
} else {
    unset($_SESSION["minusError"]); //Si no hay ningun error, elimino la variable minusError para no quedar registrado alguna variable de pruebas anteriores
}

//Redireccion con las comprobaciones a el index.php
header("Location: index1.php");