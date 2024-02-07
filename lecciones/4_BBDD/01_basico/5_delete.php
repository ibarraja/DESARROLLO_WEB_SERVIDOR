<?php

//$resultado->rowCount() ---> Cuenta cuantas filas han sido alteradas

require_once "funciones.php";

$pdo = conectaDb();

$nombre = 'Pepito';
$apellido = 'Conejo';

$consulta ="DELETE FROM personas WHERE nombre = :nombre AND apellidos = :apellido";

$resultado = $pdo->prepare($consulta);

if(!$resultado){
    print " <p>Error al preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
}elseif(!$resultado->execute([":nombre" => $nombre, ":apellido" => $apellido])){
    print "<p>Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
} else {
    if($resultado->rowCount() == 0){
        print "<p> No hay mas $nombre $apellido en esta tabla";
    } else {
        print "    <p>Registro eliminado correctamente. Se han eliminado {$resultado->rowCount()}</p>\n";
    }

}



