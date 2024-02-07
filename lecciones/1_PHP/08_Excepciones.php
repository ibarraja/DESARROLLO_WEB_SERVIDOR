<?php
    //Excepciones
    function dividir($a,$b){
        if($b ==0){
            throw new Exception('ERROR: Division por cero');
        }
        return $a/$b;
    }

    try{
        $a = 6;
        $b = 1;
        $resultado = dividir($a,$b);
        print "$a dividido entre $b es ". number_format($resultado,3)."<hr>";
    } catch (Exception $e){
        print "Excepcion capturada: ". $e->getMessage();
    }
