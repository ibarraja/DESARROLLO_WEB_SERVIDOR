<?php
require_once ("funciones.php");


// if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST'){
//     print ('<pre>');
//     print_r($_POST);
//     print ('</pre>');
// }

// $listaId = recogeLista('listaids');
// $id= array_keys($listaId)[0];

// print_r($id);

$id = recoge('id');
// print_r($id);
$nombre = recoge('nombre');
// print_r($nombre);
$apellidos = recoge('apellidos');
// print_r($apellidos);

$nombreOK    = true;
$apellidosOK = true;

?>

<body>
    <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>CRUD personas</title>
</head>

<body>
<?php cabecera("Modificar 3", MENU_VOLVER);?>

    <main>
        <?php
        if (!$nombreOK) {
            print "<p class='aviso'>Error en el nombre</p>";
        }
        if (!$apellidosOK) {
            print "<p class='aviso'>Error en los apellidos</p>";
        }

       if ($nombreOK  && $apellidosOK) {
            $pdo = conectaDb();
            $consulta = "UPDATE $cfg[nombretabla] 
                         SET nombre = '$nombre', apellidos = '$apellidos'
                         WHERE id = $id";

            $resultado = $pdo->prepare($consulta);
            if (!$resultado) {
                print "    <p class=\"aviso\">Error al preparar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
            } elseif (!$resultado->execute()) {
                print "    <p class=\"aviso\">Error al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
            } else {
                print "    <p>Registro modificado correctamente.</p>\n";
                $pdo = null;
            }
        }
        ?>


    </main>


    <?php pie(); ?>



</body>
    
</body>
</html>