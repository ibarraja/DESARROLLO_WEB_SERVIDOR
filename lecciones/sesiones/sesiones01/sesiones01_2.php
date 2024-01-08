<?php

session_name("sesion_javi");
session_start();
print "<pre>";
print_r($_SESSION);
print "</pre>";

print "<h1>Sesiones01_2</h1>";


$nombre = $_SESSION["nombre"];
$lista = $_SESSION["lista"];

print "<p>El nombre del cantante latino favorito de Adrián es: $nombre";
print "<p>A Adrián le encanta comerme los ". $lista[2]."</p>";

//Forma 1
echo "<h3>forma 1</h3>";
$usuario = $_SESSION["usuario"];
foreach ($usuario as $elemento){
    echo $elemento . "<br>";
};

// Forma2
echo "<h3>forma 2</h3>";

print "<p>El email es ".$_SESSION["usuario"]["Email"]."</p>";


print "<p><a href='sesiones01_1.php'>➡️ sesiones01_1.php</a></p>";
print "<p><a href='sesiones01_3.php'>➡️ sesiones01_3.php</a></p>";