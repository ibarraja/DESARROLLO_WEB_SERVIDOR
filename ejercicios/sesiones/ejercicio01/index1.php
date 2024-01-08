<?php
    session_start();
    session_name("mayusYminus");
    
    require_once('../../util/utilidades.php');

    //Muestro la recogida de datos para orientarme y ver que se esta recogiendo, y comprobando si funciona bien
    print "<pre>";
    print_r($_SESSION);
    print "</pre>";


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css" title="Color">
  <title>SESIONES</title>
</head>

<body>
    <header>
        <h1>FORMULARIO PALABRAS EN MAYÚSCULAS Y MINÚSCULAS(EJERCICIO)</h1>
    </header>
    <main>
        

        <!-- Si existe el campo mayus/minus, y no tiene ningun error, imprimo el mensaje de todo ok -->
        <?php
        if (isset($_SESSION["mayus"]) && !isset($_SESSION["mayusError"])){
            print "<p>Ha escrito una palabra en mayúsculas: <strong>" . $_SESSION["mayus"] . ".</strong></p>";
        }
        if (isset($_SESSION["minus"]) && !isset($_SESSION["minusError"])){
            print "<p>Ha escrito una palabra en minúsculas: <strong>" . $_SESSION["minus"] . ".</strong></p>";
        }

        ?>
        <!-- Formulario, envia los datos recogidos a Backend.php -->
        <form action="backend1.php" method="post">
            <table>
                <tr>
                    <td>Mayúsculas: </td>
                    <td><input type="text" name="mayus"></td>
                    <!-- Celda que, de existir un error tras comprobaciones del backend, imprime el mensaje de error -->
                    <td><span class="error">
                        <?php

                        if (isset($_SESSION["mayusError"])){
                            print $_SESSION["mayusError"];
                        }else{
                            print "";
                        }
                        ?>
                    </span></td>
                </tr>
                <tr>
                    <td>Minúsculas:</td>
                    <td><input type="text" name="minus"></td>
                    <!-- Celda que, de existir un error tras comprobaciones del backend, imprime el mensaje de error -->
                    <td><span class="error">
                        <?php

                        if (isset($_SESSION["minusError"])){
                            print $_SESSION["minusError"];
                        }else{
                            print "";
                        }
                        ?>
                    </span></td>
                </tr>
            </table>
            <p>
                <!-- Boton imprimir datos -->
                <input type="submit" name="enviarDatos" value="Comprobar">
                <!-- Boton eliminar variables de sesion -->
                <input type="submit" name="borrarDatos" value="Borrar">
            </p>

        </form>


    </main>
    <footer>
    <hr>
    <p>Autor: @JIM</p>
  </footer>
</body>

</html>