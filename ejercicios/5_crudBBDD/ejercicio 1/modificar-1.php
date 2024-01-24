<?php
require_once("funciones.php");
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
    cabecera("Modificar 1", MENU_VOLVER);
    ?>

    <main>
        <?php
        $pdo = conectaDb();
        $consulta = "SELECT * FROM $cfg[nombretabla]";

        $resultado = $pdo->query($consulta);
        if (!$resultado) {
            print "    <p class=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
        } else {
            print "    <form action=\"modificar-2.php\" method=\"post\">\n";
            print "    <p>Selecciona los registros que desees eliminar:</p>\n";
            print "\n";
            print "    <table class=\"conborde franjas\">\n";
            print "      <thead>\n";
            print "        <tr>\n";
            print "          <th>Modificar</th>\n";
            print "          <th>Nombre</th>\n";
            print "          <th>Apellidos</th>\n";
            print "        </tr>\n";
            print "      </thead>\n";
            foreach ($resultado as $registro) {
                print "      <tr>\n";
                print "        <td class=\"centrado\"> <input type=\"radio\" name=\"listaids[$registro[id]]\"></td>\n";
                print "        <td>$registro[nombre]</td>\n";
                print "        <td>$registro[apellidos]</td>\n";
                print "      </tr>\n";
            }
            print "    </table>\n";
            print "<p>";
            print "    <input type=\"submit\" value=\"Modificar registro\">";
            print "    <input type=\"reset\" value=\"Reiniciar formulario\">";
            print "<p>";
            print "</form>";

        }

        ?>


    </main>


    <?php
    pie();
    ?>



</body>

</html>