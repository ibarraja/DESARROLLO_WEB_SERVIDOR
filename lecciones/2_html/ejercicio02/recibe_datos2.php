<?php

##Recogemos los datos con $_POST
print "<h2>Mostrar datos</h2>";

if(isset($_POST["nombre"]) && $_POST["nombre"] != ""){
    // $nombre = $_POST["nombre"];
    $nombre = htmlspecialchars(strip_tags($_POST["nombre"]));
}else{ $nombreError = "No se ha escrito ningun nombre"; }

if(isset($_POST["edad"]) && $_POST["edad"] != ""){
    $edad = $_POST["edad"];
}else{ $edadError = "No se ha escrito ninguna edad"; }

if(isset($_POST["curso"])){
    $curso = $_POST["curso"];
} else { $cursoError = "No se ha seleccionado ningun curso"; }

//Mostramos los datos
if(isset($nombre)){
    print "Nombre: $nombre"."<br>";
} else { print "Nombre: $nombreError"."<br>"; }

if(isset($edad)){
    print "Edad: $edad"."<br>";
} else { print "Edad: $edadError"."<br>"; }

if(isset($curso)){
    print "Curso: $curso"."<br>";
} else { print "Curso: $cursoError"."<br>"; }


print "<p><a href='formulario02.html'>Volver al formulario</a></p>";