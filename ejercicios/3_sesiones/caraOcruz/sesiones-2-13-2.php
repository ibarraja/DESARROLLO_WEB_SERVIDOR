<?php

session_name("sesiones-2-13");
session_start();

if (!isset($_SESSION["g"]) || !isset($_SESSION["m"]) || !isset($_SESSION["moneda"])) {
    header("Location:sesiones-2-13-1.php");
    exit;
}

function recoge($var)
{
    $tmp = (isset($_REQUEST[$var]))
    ? trim(htmlspecialchars($_REQUEST[$var]))
    : "";
    return $tmp;
}

$siguiente= recoge("siguiente");

if ($siguiente == "Lanzar moneda") {
    $_SESSION["moneda"] = rand(1, 2);
    if ($_SESSION["moneda"] == 1) {
        $_SESSION["g"] += 1;
    } else {
        $_SESSION["m"] += 1;
    }
} elseif ($siguiente == "Volver a empezar") {
    $_SESSION["moneda"] = 0;
    $_SESSION["g"]      = 0;
    $_SESSION["m"]      = 0;
}

header("Location:sesiones-2-13-1.php");
exit;
