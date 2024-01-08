<?php


session_start();
print "<pre>";
print_r($_SESSION);
print "</pre>";


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./estilos.css" title="Color">
  <title>SESIONES</title>
</head>

<body>
    <header>
        <h1>Sesiones02_1</h1>
    </header>
    <main>

        <?php
            $nombre = $_SESSION["nombre"];
            echo "<p>El nombre es: ". $nombre ."</p>";
            print "<p><a href='sesiones02_1.php'>➡️ sesiones02_1.php</a></p>";

        ?>
    
    </main>
</body>
</html>

