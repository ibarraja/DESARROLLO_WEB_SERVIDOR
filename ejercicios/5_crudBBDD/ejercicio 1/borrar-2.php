<?php

require_once('./funciones.php');

// if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST'){
//     print ('<pre>');
//     print_r($_POST);
//     print ('</pre>');
// }

$listaids = recogeLista('listaids');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>CRUD Personas</title>
</head>

<body>

    <?php
    cabecera("BORRAR 2", MENU_VOLVER);?>

    <main>
        <?php
        foreach ($listaids as $id => $valor){
            $pdo = conectaDb();

            $consulta = "DELETE FROM $cfg[nombretabla] WHERE id=$id;";

            $resultado = $pdo -> query($consulta);
            if (!$resultado ) {
                print "    <p class=\"aviso\">Error al preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
            }elseif (!$resultado->execute()) {
                print "    <p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
            } else {
                print "    <p>Registro eliminado(s) correctamente.</p>\n";
                $pdo = null;
            }
        }
    ?>
    </main>
    <?php pie(); ?>

</body>
    
</body>
</html>