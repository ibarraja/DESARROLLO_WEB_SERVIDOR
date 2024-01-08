<?php

    $datos = ["Santiago", "Ramon y Cajal",1852];//Distintos tipos
    print "$datos[1] nació en $datos[2].<br>";

    var_dump($datos); //muestra el tipo, el valor y la posición de los datos de una matriz
    print "<br>";
    print_r($datos); //muestra el valor y la posición de los datos
    
    //Forma bonita de verlo:
    print "<pre>";
    print_r($datos); //muestra el valor y la posición de los datos
    print "</pre>";
    
    echo "<hr>";
    
    //las matrices son dinámicas, si definimos la de una posición dada, continuará ampliando por arriba simpre que le demos valores nuevos
    $matriz = [];
    $matriz[] = "primer elemento";
    $matriz[11] = "ahora te jodes";
    $matriz[] = "segundo elemento";
    $matriz[9] = "ahora te jodes";
    $matriz[] = "te machaco? elemento";
    $matriz[] = "te machaco? elemento";
    print "<pre>";
    print_r($matriz); //muestra el valor y la posición de los datos
    print "</pre>";
    print "el tamaño del array es ".sizeof($matriz)."<br>";
    
    print "<hr>";

    //MATRICES ASOCIATIVAS

    $edades = ["Andrés" => 21, "Barbara" => 19, "Camilo" => 22];
    print "Barbara tiene $edades[Barbara]<br>"; 
    print "Andrés tiene $edades[Andrés]<br>"; 
    print "Camilo tiene $edades[Camilo]<br>";

    print "<br>";
    
    foreach ($edades as $indice => $valor){
        echo "$indice tiene $valor años. <br>";
    }

    print "<hr>";

    $cuadrados = [5 => 25, 9 => 81];
    $cuadradosCopia = $cuadrados;

    $nombres1 = ["alba"];
    $nombres2 = ["juan", "barbara", "carlos"];
    print "<pre>";
    print_r($nombres1+$nombres2);
    print "</pre>";

    $dias1 = [1=>"lunes"];
    $dias2 = [2 => "martes", 3 => "miercoles"];
    $dias = $dias1 + $dias2;

    print"".var_dump($dias)."<br>";


    //COPIA DE MATRICES




?>