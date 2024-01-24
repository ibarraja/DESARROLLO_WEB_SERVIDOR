<?php
require_once("funciones.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>BBDD - Borrar y crear</title>
</head>

<body>
    <?php cabecera("Inicio", MENU_VOLVER); ?>
    <main>
        <div>
            <form action="./borrar-todo-2.php" method = "post">
                <p>¿Estas seguro?</p>
                <input type="submit" name= "borrar" value="Si">
                <input type="submit" name= "borrar" value="No">
            </form>
        </div>
    </main>

    <?php pie(); ?>
</body>
</html>