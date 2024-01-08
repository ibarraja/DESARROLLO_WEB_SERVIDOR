<?php

    //Funciones ya definidas
    $nombre1 = "Pedro";
    $nombre2;
    $apellidos = "Sanchez";

    //Funcion isset
    print "<p> Tu nombre es <strong> ";
    if (isset($nombre1)){
        print "$nombre1";
    }
    if (isset($nombre2)){
        print " $nombre2";
    }
    if (isset($apellidos)){
        print " $apellidos";
    }

    print "</strong> </p>";
    echo "<hr>";


    //Función is_null()
    $sexo = "F";

    if(is_null($sexo)){
        print "El sexo no esta definido.";
    }elseif($sexo == "M"){
        print "Sexo: Masculino";
    }elseif($sexo == "F"){
        print "Sexo: Femenino";
    }

    print "<hr>";


    //Comprobar estado de una variable
    //is_int()    o    is_float()    o    is_numeric()
    
    $a = 4;
    
    if (is_int($a)){
        print "La variable $a es de tipo ENTERO.";
    }

    print "<hr>";

    //Definir funciones

    function suma($a,$b){
        return $a + $b;
    }

    print "". suma(6,5). "<br>";

    //---------------------------

    function saludar($nombre="usuario",$negrita=0){
        if($negrita==1){
            print "<p>Hola <strong>$nombre</strong>.</p>";
        }else{
            print "<p>Hola $nombre. </p>";
        }
        
    }

    saludar("Juan", 1);



?>