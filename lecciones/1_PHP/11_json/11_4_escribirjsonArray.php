<?php
// Creo un array
$lista_personas = [];

// Creo una persona
$persona = array(
    "nombre" => "Juan",
    "email" => "juan@test.com",
    "telefono" => "600111111"
);
//La añado al array
array_push($lista_personas,$persona);


// Creo una persona
$persona = array(
    "nombre" => "Adrian",
    "email" => "adrian@test.com",
    "telefono" => "600111112"
);
//La añado al array
array_push($lista_personas,$persona);


//Creo el formato json del array
$json_lista_personas = json_encode($lista_personas,JSON_PRETTY_PRINT);
//Imprimo para comprobar como quedaría
print "<pre>";
print_r($json_lista_personas);
print "</pre>";


//Creo un file en el path
$file = "./bbdd/datos2.json";
//Genero el json en el nuevo file
file_put_contents($file,$json_lista_personas);

//Hago un decode del json en un array
$lista_personas = json_decode($json_lista_personas);

//Creo nuava persona
$persona = array(
    "nombre" => "Javier",
    "email" => "javi@test.com",
    "telefono" => "600222222"
);

//añado al array mi nueva persona
array_push($lista_personas, $persona);

//Creo el formato json del array
$json_lista_personas = json_encode($lista_personas, JSON_PRETTY_PRINT);

print "<pre>";
print_r($json_lista_personas);
print "<hr>";
print "</pre>";

//Creo un file en el path
$file = "./bbdd/datos2.json";
//Genero el json en el nuevo file
file_put_contents($file,$json_lista_personas);

// $jsonData = file_get_contents($file, FILE_USE_INCLUDE_PATH);
// $lista_personas = json_decode($jsonData);