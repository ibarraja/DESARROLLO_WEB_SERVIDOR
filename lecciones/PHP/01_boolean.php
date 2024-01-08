<?php

    //Números enteros no iguales a cero funcionan como un Boolean True
    $numeroEnteroTrue = 5;
    
    if ($numeroEnteroTrue){
        print "$numeroEnteroTrue Autorizado";
        print "<br>";
    }
    if (!$numeroEnteroTrue){
        print "$numeroEnteroTrue No Autorizado";
        print "<br>";
    }
    
    //Números enteros iguales a cero funcionan como un Boolean False
    $numeroEnteroFalse = 0;
    
    if ($numeroEnteroFalse){
        print "$numeroEnteroFalse Autorizado";
        print "<br>";
    }
    if (!$numeroEnteroFalse){
        print "$numeroEnteroFalse No Autorizado";
        print "<br>";
    }

    print "<hr>";
    
    //Números decimales no iguales a cero funcionan como un Boolean True
    $numeroDecimalTrue = 2.3;
    
    if ($numeroDecimalTrue){
        print "$numeroDecimalTrue Autorizado";
        print "<br>";
    }
    if (!$numeroDecimalTrue){
        print "$numeroDecimalTrue No Autorizado";
        print "<br>";
    }
    
    //Números decimales iguales a cero funcionan como un Boolean False
    $numeroDecimalFalse = 0.0;
    
    if ($numeroDecimalFalse){
        print "$numeroDecimalFalse Autorizado";
        print "<br>";
    }
    if (!$numeroDecimalFalse){
        print "$numeroDecimalFalse No Autorizado";
        print "<br>";
    }
    
    print "<hr>";

    //Cadenas de texto no vacías funcionan como un Boolean True
    $cadenaTexto = "Hola Youtube";
    
    if ($cadenaTexto){
        print "\"$cadenaTexto\" Autorizado <br>";
    }
    
    if (!$cadenaTexto){
        print "\"$cadenaTexto\" No Autorizado <br>";
    }
    
    //Cadenas de texto vacías funcionan como un Boolean False
    $cadenaTextoVacia = "";
    
    if ($cadenaTextoVacia){
        print "\"$cadenaTextoVacia\" Autorizado <br>";
    }
    
    if (!$cadenaTextoVacia){
        print "\"$cadenaTextoVacia\" No Autorizado <br>";
    }

    print "<hr>";

?>