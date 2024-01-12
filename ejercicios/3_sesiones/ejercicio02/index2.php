<?php
    session_start();
    session_name("subirYbajar");

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
        <h1>Subir y bajar número(EJERCICIO)</h1>
    </header>
    <main>

        <p>Haga click en los botones para modificar el valor:</p>

        <form action="backend2.php" method="post">
        <p>
            <input type="submit" name="bajar" value="-" style="font-size: 4rem"></input>
            <span id="num" style="font-size: 4rem">
                <?php
                $num = 0;
                    if($_SESSION["num"]!= 0){
                        $_SESSION["num"] = $_SESSION["num"] + $_SESSION["operacion"];
                        $_SESSION["operacion"] = 0;
                    } else {
                        $_SESSION["num"] = $num;
                        $_SESSION["num"] = $_SESSION["num"] + $_SESSION["operacion"];
                        $_SESSION["operacion"] = 0;
                    }
                    print $_SESSION["num"];
                ?>
            </span>
            <input type="submit" name="subir" value="+" style="font-size: 4rem"></input>
        </p>
            
        <input type="submit" name="poner0" value="Poner a cero">
        <!-- <input type="submit" name="borrarDatos" value="Borrar"> -->
            
        </form>

        
    </main>
    <footer>
    <hr>
    <p>Autor: @JIM</p>
  </footer>
</body>

</html>