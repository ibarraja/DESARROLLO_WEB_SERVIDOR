<?php
    $nombre = $_REQUEST["nombre"];
    $edad   = $_REQUEST["edad"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RecibeDatos</title>
    <link rel="stylesheet" href="estilos.css" title="Color">
</head>
<body>
    <header>
        <h1>Formulario_Calcular Edad</h1>
    </header>
    <main>
        <?php

        echo "<p>Hola  ".$nombre."</p>";
        echo "<p>Edad: ".$edad."</p>";
        
        ?>

        <p><a href="formulario.php">Volver al formulario</a></p>
    </main>
    
</body>
</html>