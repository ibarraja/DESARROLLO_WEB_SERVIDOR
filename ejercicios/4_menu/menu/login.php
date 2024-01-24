<?php
session_start();

if (isset($_SESSION["errorLoginPass"])) {
    $errorLoginPass = $_SESSION["errorLoginPass"];
}
?>

<!DOCTYPE html>
<html lang="es">
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
        <form action="procesar_login.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><input type="text" name="email"  placeholder="Correo Electrónico"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="password"  placeholder="Contraseña"></td>
                </tr>

                <tr>
                    <td colspan="2" style="align-items='center'">
                        <p><button class="botonSubmit" type="submit" name="login" value="login">Acceder</button></p>
                    </td>
                </tr>
            </table>
            <!-- <label for="nombre">Nombre:</label> -->
        </form>


    </div>
    <?php
        if (isset($errorLoginPass)) {
            print "<p class='error'>$errorLoginPass</p>";
            unset($_SESSION["errorLoginPass"]);
        }
    ?>

</main>
    
</body>
</html>