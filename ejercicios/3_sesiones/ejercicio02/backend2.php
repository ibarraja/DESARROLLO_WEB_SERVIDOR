<?php


session_start();
session_name("subirYbajar");
// print "<pre>";
// print_r($_SESSION);
// print "</pre>";

if (isset($_POST['borrarDatos'])) {
    session_unset();
    session_destroy();
}



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

$num = recoge("num");

$_SESSION["operacion"] = $num;

if (isset($_POST['poner0'])) {
    $_SESSION["num"] = 0;
}

if($_SESSION["num"]>=0 && $_SESSION["num"]<10){

    if (isset($_POST['subir'])) {
        $_SESSION["operacion"] = 1;
    }
}

if($_SESSION["num"] > 0 && $_SESSION["num"]<=10){
    if (isset($_POST['bajar'])) {
        $_SESSION["operacion"] = -1;
    }

}


header("Location: index2.php");