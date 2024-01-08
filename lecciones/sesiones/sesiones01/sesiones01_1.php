<?php
session_name("sesion_javi");
session_start();

print "<h1>Sesiones01_1</h1>";

// Pasar una sola variable
$_SESSION["nombre"] = "Pepito Grillo";

// Pasar una lista
$productos = array("leche", "pan", "huevos");
$_SESSION["lista"] = $productos;

// Pasar un array asociativo:
$usuario= array(
    "Nombre" => "Pepe",
    "Email"  => "pepe@kk.com",
    "Edad"   => 34
);
$_SESSION["usuario"] = $usuario;


echo "<p>El nombre es $_SESSION[nombre]</p>";


print "<p><a href='sesiones01_2.php'>➡️ sesiones01_2.php</a></p>";
print "<p><a href='sesiones01_3.php'>➡️ sesiones01_3.php</a></p>";