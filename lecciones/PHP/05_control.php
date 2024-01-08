<?php

    $var = 3;
    if ($var == 1){
        echo "Es un uno<br>";
    }elseif ($var == 2){
        echo "Es un dos<br>";
    }elseif ($var == 3){
        echo "Es un tres<br>";
    }else{
        echo "No es ni un uno, ni un dos, ni un tresss<br>";
    }

    print "<hr>";

    $a = 3;
    $b = "3";

    if ($a == $b){
        echo "Son lo mismo<br>";
    }else{
        echo "No son lo mismo<br>";
    }
    
    if($a === $b){
        echo "Son idénticos<br>";
    }else{
        echo "No son identicos<br>";
    }

    print "<hr>";

    for($i=0; $i < 5; $i++){
        echo "$i <br>";
    }

    print "<br>";

    $matriz = [0,1,10,100,1000];
    foreach($matriz as $valor){
        print $valor. "<br>";
    }

    print "<br>";

    foreach($matriz as $indice => $valor){
        print "$indice -> $valor <br>";
    }

?>