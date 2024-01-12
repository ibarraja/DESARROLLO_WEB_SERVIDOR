<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

<?php
include './header.html';
include './menu.php';
include './footer.html';
?>
<main>
<div class="formulario">
        Login de usuario:
        <form action="procesar_alta.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><input type="text" name="email" placeholder="Correo Electrónico" value="<?php echo !empty($_SESSION['usuario']) ? $_SESSION["usuario"]["nombre"] : ''; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="password" placeholder="Contraseña*" value="<?php echo !empty($_SESSION['usuario']) ? $_SESSION["usuario"]["password"] : ''; ?>" required></td>
                </tr>

                <tr>
                    <td colspan="2" style="align-items='center'">
                        <p><button class="botonSubmit" type="submit" name="submit" value="alta">Logearse</button></p>
                    </td>
                </tr>
            </table>
            <!-- <label for="nombre">Nombre:</label> -->
        </form>

    </div>

</main>
    
</body>
</html>