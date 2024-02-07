<?php
session_start();
require_once(__DIR__ . "/includes/funciones.php");

if (isset($_SESSION["listaPersonas"])) {
    $listaPersonas = $_SESSION["listaPersonas"];
    unset($_SESSION["listaPersonas"]);
} else {
    $_SESSION["listar"] = true;
    header("Location: " . APP_FOLDER . "/backend/bbdd-listar.php");
    exit();
}
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
    cabecera("Listar", MENU_PRINCIPAL);
    ?>

    <main>
        <p>Listado completo de registros:</p>

        <table class="conborde franjas">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                </tr>
            </thead>

            <?php
            foreach($listaPersonas as $persona){
                print "        <tr>\n";
                print "            <td>$persona[nombre]</td>\n";
                print "            <td>$persona[apellidos]</td>\n";
                print "        </tr>\n";
            }
            ?>

        </table>

    </main>


    <?php
    pie();
    ?>



</body>

</html>