<?php

    $entero = 4;
    $numero = 5.3;
    $cadena = "Hola";


    //CONSTANTES
    print "CONSTANTES<br>";
    define("LIMITE", 1000);
    $suma = 1 +1000;
    print $suma;
    print "<hr>";
    // print "<br><br>";
    
    // print "<pre>";
    // print_r(get_defined_constants());
    // print "<br>";
    // print "<hr>";
    

    //VARIABLES PREDEFINIDAS
    print "VARIABLES PREDEFINIDAS<br>";
    echo "Ruta dentro de htdocs: ".$_SERVER['PHP_SELF']."<br>";
    echo "Nombre del servidor: ".$_SERVER['SERVER_NAME']."<br>";
    echo "Software del servidor: ".$_SERVER['SERVER_SOFTWARE']."<br>";
    echo "Protocolo: ".$_SERVER['SERVER_PROTOCOL']."<br>";
    echo "Método de petición: ".$_SERVER['REQUEST_METHOD']."<br>";
    
    print "<hr>";
    // print "<br><br>";
    
    //INTERPOLACIÓN DE VARIABLES
    print "INTERPOLACIÓN DE VARIABLES<br>";
    $name ="Juan";
    echo "Me llamo $name.<br>";
    
    $prefijo = "super";
    echo "estoy  {$prefijo} contento<br>";  //Works
    echo "estoy  $prefijo contento<br>";    //Works
    echo "estoy  $prefijocontento<br>";     //Da error, toma como variable '$prefijocontento'
    echo 'estoy  {$prefijo} contento<br>';  //Con comillas simples no funciona la Interpolación
    
    print "<hr>";
    // print "<br><br>";
    
    //ASIGNAICIÓN POR REFERENCIA
    echo "ASIGNACIÓN POR REFERENCIA <br>";

    $var1 = 100;
    $var2 = &$var1;
    $var3 = $var1;

    echo "var1 = $var1 <br>";
    echo "var2 = $var2 <br>";


    print "<hr>";
    // print "<br><br>";
    




    
    
    ?>