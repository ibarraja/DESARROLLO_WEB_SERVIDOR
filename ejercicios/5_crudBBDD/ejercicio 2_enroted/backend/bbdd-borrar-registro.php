<?php

require_once(__DIR__ . '/../includes/funciones.php');

// if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST'){
//     print ('<pre>');
//     print_r($_POST);
//     print ('</pre>');
// }



$listaids = recogeLista('listaids');

foreach ($listaids as $id => $valor){
    $pdo = conectaDb();

    $consulta = "DELETE FROM $cfg[nombretabla] WHERE id = $id";

    $resultado = $pdo->query($consulta);

    if (!$resultado) {
        $_SESSION["errorBBDD"] = "<p>Error en la cunsulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>";
    } elseif (!$resultado->execute()){
        $_SESSION["errorBBDD"] = "<pError al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>";
        
    }
}
header("Location: ". APP_FOLDER ."/borrar-1.php");
exit();

