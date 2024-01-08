<?php

## Recogemos los datos con POST
print "<h2>Mostramos datos con recibe_datos3.php</h2>";

function recoger($var){
    if (isset($_POST[$var])){
        $tmp = trim($_POST[$var]);
        if($tmp != ""){
            $tmp = trim(htmlspecialchars(strip_tags($_POST[$var])));
            return $tmp;
        }
    }
    return null;
}

$nombre = recoger("nombre");
$edad   = recoger("edad"  );
$curso  = recoger("curso" );

//Mostrar los datos
if (!is_null($nombre)){
    print "Nombre: $nombre"."<br>";
} else { print "Nombre: No se ha indicado un nombre"."<br>"; }

if(!is_null($edad)){
    if (is_numeric($edad)){
        print "Edad: $edad"."<br>";
    } else{
        print "Edad: Error! Edad no es un número"."<br>";
    }
}else{ print "Edad: No se ha escrito ninguna edad"."<br>"; }

if(!is_null($curso)){
    print "Curso: $curso"."<br>";
} else { print "Curso: No se ha seleccionado ningun curso"."<br>"; }


print "<p><a href='formulario02.html'>Volver al formulario</a></p>";