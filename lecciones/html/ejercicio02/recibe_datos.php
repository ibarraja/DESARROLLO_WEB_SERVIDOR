<?php

##Miro las matrices para ver los datos
// print "<pre>";
// print "Matriz \$_REQUEST"."br";
// print_r($_REQUEST);
// print "</pre>";

##Vamos a recoger los datos con POST
print "<h2>Mostrar datos</h2>";

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$curso = $_POST["curso"];

print "Nombre: $nombre <br>";
print "Edad: $edad <br>";
print "Curso: $curso <br>";

print "<p><a href='formulario02.html'>Volver al formulario</a></p>";
?>