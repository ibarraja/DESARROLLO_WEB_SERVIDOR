<?php
session_start();
require_once (__DIR__ . '/../includes/funciones.php');

if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST'){
    print ('<pre>');
    print_r($_POST);
    print ('</pre>');
}

$nombre = recoge('nombre');
$apellidos = recoge('apellidos');

$nombreOK = true;
$apellidosOK = true;

if(!$nombreOK){
    $_SESSION['errorNombre'] = 'Error en el nombre';
}if (!$apellidosOK){
    $_SESSION['errorApellidos'] = 'Error en los apellidos';
}

$resultado ='';

if ($nombreOK && $apellidosOK){
    $pdo = conectaDb();

    if($nombre != '' && $apellidos != '') {
        $consulta = "SELECT * 
                     FROM $cfg[nombretabla]
                     WHERE nombre = '$nombre' AND apellidos = '$apellidos';
                    ";

        $resultado = $pdo->query($consulta);


    } elseif($nombre != '' && $apellidos == '') {
        $consulta = "SELECT * 
                     FROM $cfg[nombretabla]
                     WHERE nombre = '$nombre';
                    ";

        $resultado = $pdo->query($consulta);


    } elseif($nombre == '' && $apellidos != '') {
        $consulta = "SELECT * 
                     FROM $cfg[nombretabla]
                     WHERE apellidos = '$apellidos';
                    ";

        $resultado = $pdo->query($consulta);

        
    } else {
        print '<p class=\"aviso\">Error: no has introducido ningun campo de busqueda.</p>';
        print "<p><button><a href=\"./index.php\">Volver al menú principal</a></button></p>";
    }

    if($resultado != ''){
        if (!$resultado) {
            $_SESSION['errorBBDD'] = "<p>Error en la cunsulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>";
        }
    }
}