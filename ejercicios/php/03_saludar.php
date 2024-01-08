<?php

    // 01_holamundografico.php
    // @author Javier95

?>
<?php
    require_once('./funciones/utilidades.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo Gráfico</title>
    <link rel="stylesheet" href="CSS/estilos.css" title="Color">
</head>
<body>
        
    <header>
        <h1>saludar con función</h1>
    </header>
    <main>
        <?php
            print "<p><strong>". saludar("Sebastián") . "</strong></p>";
            print "<p><strong>". sumar(8,6) . "</strong></p>";
        ?>
    </main>
    <footer>
        <hr>
        <p>Autor Javier Ibarra Muñoz</p>
    </footer>
</body>
</html>