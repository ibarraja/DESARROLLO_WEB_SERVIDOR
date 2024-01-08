


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Formulario 5</h1>
        <h2>Preservar valores entre llamadas POST</h2>
    </header>
    <main>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){

                if($_POST["submit"] == "secreto"){
                    $valorSecreto = $_POST["secreto"];
                }
            }

            if(isset($valorSecreto)){
                print "<p>Valor secreto: $valorSecreto </p>";
            } else {
                print "<p>Valor secreto: SIN ASIGNAR </p>";
            }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>Valor secreto: <input type="text" name="secreto"></p>
            <p>
                <button type="submit" name="submit" value="secreto">Enviar valor</button>
                <button type="submit" name="submit" value="otracosa">Enviar otra cosa</button>

            <?php
            if(isset($valorSecreto)){
                //var_dump($valorSecreto);
                echo '<input type="hidden" name="valorSecreto" value='.$valorSecreto.'>';
            }
            ?>
            </p>
        </form>
    </main>
    <footer>
      <hr>
      <p>Autor: @JIM</p>
    </footer>
    
</body>
</html>