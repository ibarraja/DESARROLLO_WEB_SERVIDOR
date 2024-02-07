<?php
require_once("funciones.php");

//Recogo del formulario el id de la persona que quiero modificar:
// if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST'){
//     print ('<pre>');
//     print_r($_POST);
//     print ('</pre>');
// }

$listaId = recogeLista('listaids');
$id= array_keys($listaId)[0];

// print_r($id);
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
    cabecera("Modificar 2", MENU_VOLVER);
    ?>

    <main>
        <p>Modifica los campos:</p>
        <form action="modificar-3.php" method="post">
            
            <?php

            $pdo = conectaDb();

            $consulta = "SELECT * FROM $cfg[nombretabla] WHERE id=$id";

            $resultado = $pdo->query($consulta); 
            if (!$resultado) {
                print "    <p clasdwasdwasds=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
            } else {
                
                foreach ($resultado as $registro) {
                    print "<input type=\"hidden\" name=\"id\" value=\"$registro[id]\" />\n";
                    print    "<table>";
                    print "      <tr>\n";
                    print "        <td>Nombre:</td>";
                    print "        <td><input type=\"text\" name=\"nombre\" size=\"50\" value=\"$registro[nombre]\" autofocus></td>\n";
                    print "      </tr>\n";
                    print "      <tr>\n";
                    print "        <td>Apellidos:</td>";
                    print "        <td><input type=\"text\" name=\"apellidos\" size=\"50\" value=\"$registro[apellidos]\" autofocus></td>\n";
                    print "      </tr>\n";
                }
                
                print    "</table>";
            }

            ?>

            <p>
                <input type="submit" value="Modificar">
                <input type="reset" value ="Reiniciar formulario">
            </p>
        </form>


    </main>


    <?php
    pie();
    ?>



</body>

</html>