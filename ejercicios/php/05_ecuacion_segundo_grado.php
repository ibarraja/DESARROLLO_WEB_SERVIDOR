<?php
//############# Ejercicio Ecuación grado 2
//Funcion que resuelva ecuaciones de 2do grado ax2+bx2+c=0
//Recive los coeficientes y devuelve un array con las soluciones
//Si no hay soluciones reales, devuelve false

function eg2($a,$b,$c){
    $operacionRaiz=($b*$b)-4*$a*$c;
    if($operacionRaiz < 0){
        return"Error: no se puede operar. La operación dentro de la raíz es negativa una raíz negativa";
    } else {
        $raiz = sqrt($operacionRaiz);
        $resultado1 = ($b*-1)+$raiz/(2*$a);
        $resultado2 = ($b*-1)+($raiz*-1)/(2*$a);
        $resultados = [$resultado1,$resultado2];
        return $resultados;
    }
}

$a = 2;
$b = 3;
$c = -4;
print "<h2>Solución ejercicio Ecuación Segundo Grado </h2>";
print "<p>Ecuación -> (". $a. ")x2 +(" .$b .")x + (" . $c.") = 0";
print "<pre>\n"; print_r(eg2($a,$b,$c)); print "</pre>\n";



//############## Ejercicio Palíndromo
//Funcion que te diga si una cadena es un palíndromo function palindromo(....)
function esPalindromo($cadena){
    $cadena = strtolower($cadena);
    $longitud = strlen($cadena);
    $inicio = 0;
    $fin = $longitud -1;

    while($inicio < $fin){
        if($cadena[$inicio] !== $cadena[$fin]){
            return false;
        }
        $inicio++;
        $fin--;  
    }
    return true;
}
echo "<h2>Solución ejercicio es Palíndromo</h2>";
$cad = "Antonia";
$resultado = esPalindromo($cad);
echo "<p>Cadena --> ". $cad."</p>";
if($resultado){
    echo "<p>Sí es palíndromo</p>";
} else {
    echo "<p>No es palíndromo</p>";
}
echo "<br>";
$cad = "Ana";
$resultado = esPalindromo($cad);
echo "<p>Cadena --> ". $cad."</p>";
if($resultado){
    echo "<p>Sí es palíndromo</p>";
} else {
    echo "<p>No es palíndromo</p>";
}
