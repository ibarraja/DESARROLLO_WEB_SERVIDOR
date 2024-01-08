<?php

$file ="./bbdd/profesores.json";
$jsondata = file_get_contents($file,FILE_USE_INCLUDE_PATH);

$profesores = json_decode($jsondata); 

// imprimirDatos($profesores);
imprimirProfesoresRicos($profesores,2000);


function imprimirDatos($profes){
    
    
    echo "<h3> Listado de profesores </h3>";


    foreach($profes as $profe){
        $nombre = "$profe->nombre";
        $email  = "$profe->email";
        $edad   = "$profe->edad";
        $salario= "$profe->salario";
        $direccion= "{$profe->direccion->calle} nº{$profe->direccion->numero} {$profe->direccion->ciudad}";

        echo "Nombre: $nombre<br>";
        echo "Email: $email<br>";
        echo "Edad: $edad<br>";
        echo "Salario: $salario<br>";
        echo "Dirección: $direccion<br>";

        echo "Materias: <ul>";
        foreach($profe->materias as $materia){
            echo "<li>$materia</li>";

        }
        echo "</ul>";
        echo "<hr>";

        
    }
}

function imprimirProfesoresRicos($profes,$cantidad){

    echo "<h3>Profesores Ricos</h3>";
    foreach($profes as $profe){
        if($profe->salario >= $cantidad){
            $nombre = "$profe->nombre";
            $email  = "$profe->email";
            $edad   = "$profe->edad";
            $salario= "$profe->salario";
            $direccion= "{$profe->direccion->calle} nº{$profe->direccion->numero} {$profe->direccion->ciudad}";

            echo "Nombre: $nombre<br>";
            echo "Email: $email<br>";
            echo "Edad: $edad<br>";
            echo "Salario: $salario<br>";
            echo "Dirección: $direccion<br>";

            echo "Materias: <ul>";
            foreach($profe->materias as $materia){
                echo "<li>$materia</li>";

            }
            echo "</ul>";
            echo "<hr>";
        }
    }
}
