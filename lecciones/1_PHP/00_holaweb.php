 <!-- ! y tecla tab: -->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- //Esto aparece en la pantalla de Cuello -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            print("<p>Hola Web</p>\n");
        ?>
        <hr>
        <?php
            $fecha_actual = date("d-m-Y");
            print("<p>La fecha es: $fecha_actual</p>\n");
        ?>
        <hr>
        <?php
            $fecha = date("Y-m-d");
            $hora = date("H:i:s");
            print("<p>Hola amigüito</p>\n");
            print("<p>Hoy es $fecha</p>\n");
            print("<p>Son las $hora</p>\n");
        ?>
    </body>
</html>