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
    <link rel="stylesheet" href="./CSS/estilos.css" title="Color">
</head>
<body>
        
    <header>
        <h1>Ejercicio Dado</h1>
    </header>
    <main>
        
    </main>
        <?php
        $valor = rand(1,6);
        $v = rand(1,6);

        print " <p><span style=\"border: black 2px solid; padding: 10px; font-size: 300%\">". $valor ."</span> ";
        print "    <span style=\"border: black 2px solid; padding: 10px; font-size: 300%\">". $v     ."</span> </p>";

        print "<p><img src='./img/". $valor .".svg' alt='Dado' width='140' height = '140'>";
        print "<img src='./img/". $v .".svg' alt='Dado' width='140' height = '140'></p>";

        print "<p><strong>La suma es: ". sumar($valor,$v) . "</strong></p>";
        ?>
    <footer>
        <hr>
        <p>Autor Javier Ibarra Muñoz</p>
    </footer>
</body>
</html>
