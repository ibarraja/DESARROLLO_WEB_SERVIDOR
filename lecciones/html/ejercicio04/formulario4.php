<?php



?>



<!-- -------------------------------------------------------------------------------------------------------------- -->




<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css" title="Color">
  <title>FORMULARIO</title>
</head>

<body>
    <header>
        <h1>Formulario 4</h1>
        <h2>Saber que botón he pulsado</h2>
    </header>
    
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>Nombre:<input type="text" name ="nombre"></p>
            <p>Edad:  <input type="text" name ="edad"  ></p>
            <p>
                <button type="submit" name="boton" value="valor1">Boton Valor1</button>
                <button type="submit" name="boton" value="valor2">Boton Valor2</button>
                <input  type="submit" name="boton" value="valor3">
            </p>
        </form>

        <?php
            if (isset($_POST["boton"])){
                print "<pre>";
                echo "Matriz \$_POST"."<br>";
                print_r ($_POST);
                print("</pre>\n");

                if($_POST["boton"] == "valor1"){
                    echo "<p>He pulsado el boton 1</p>";
                }
                if($_POST["boton"] == "valor2"){
                    echo "<p>He pulsado el boton 2</p>";
                }
                if($_POST["boton"] == "valor3"){
                    echo "<p>He pulsado el boton 3</p>";
                }
            }

        ?>
    </main>
    
    <footer>
      <hr>
      <p>Autor: @JIM</p>
    </footer>
</body>

</html>