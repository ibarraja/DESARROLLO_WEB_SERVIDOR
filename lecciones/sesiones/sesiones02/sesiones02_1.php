<?php
    session_start();
    require_once('../../util/utilidades.php');
    // function recoge($var)
    // {
    //     if(isset($_POST[$var])) {
    //         if($_POST[$var] != ""){
    //             $tmp = trim(htmlspecialchars(strip_tags($_REQUEST[$var])));
    //             return $tmp;
    //         }
    //     }
    //     return null;
    // }

    /* Si va bien redirige a la Pagina Principal, si va mal, mensaje de error */
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = recoge("nombre");
        $edad   = recoge("edad");
        $OK = true;

        if(is_null($nombre)){
            $nombreERROR = "Falta el nombre";
            $OK = false;
        }
        if(is_null($edad)){
            $edadERROR = "Falta la edad";
            $OK = false;
        }elseif(!is_numeric($edad)){
            $edadERROR = "La edad tiene que ser un número";
            $OK = false;
        }

        if($OK) {
            
            //  Me creo las variables de sesion:
            $_SESSION["nombre"] = $nombre;
            $_SESSION["edad"] = $edad;

        }
    }
    
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
        <h1>Sesiones02_1</h1>
    </header>
    <main>
        <!-- usar 
        action = "< ?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  
        -->
        <form action="sesiones02_1.php" method="post">
            <table>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Edad:</td>
                    <td><input type="text" name="edad"></td>
                </tr>
            </table>
            <p><input type="submit" value="Enviar"></p>
        </form>

        <?php
            if (isset($nombreERROR)) {
                print "<p class='error'>$nombreERROR</p>";
            }
            if (isset($edadERROR)) {
                print "<p class='error'>$edadERROR</p>";
            }
        ?>

        <p><a href='sesiones02_2.php'>➡️ sesiones02_2.php</a></p>
    </main>
    <footer>
    <hr>
    <p>Autor: @JIM</p>
  </footer>
</body>

</html>