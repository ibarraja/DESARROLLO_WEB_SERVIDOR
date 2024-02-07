<?php
    // Podemos usar comillas simples o dobles 
    // \!/ Tener en cuenta que con las comillas simples no funciona '\' para mostrar los caracteres especiales
    $nombre = "Javier";
    $apellidos = "Ibarra Muñoz";

    print "<p>Mi nombre es \"$nombre $apellidos\"</p>\n";
    print "<p>Mi nombre es " .$nombre." ". $apellidos ."</p>\n";

    $aleatorio = rand(1,10);

    print "<p>Numero aleatorio:".$aleatorio. "</p>\n";

?>


