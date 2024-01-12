<?php
require_once('modelo.php');
session_start();

if(isset($_SESSION['errorEmail'])){
    $errorEmail = $_SESSION['errorEmail'];
}

if(isset($_SESSION['errorPassword'])){
    $errorPassword = $_SESSION['errorPassword'];
}

if(isset($_SESSION['dataOK'])){
    $dataOK = $_SESSION['dataOK'];
}

?>

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
        Alta de usuario:
        <form action="procesar_alta.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><input type="text" name="nombre" placeholder="Nombre" value="<?php echo !empty($_SESSION['usuario']) ? $_SESSION["usuario"]["nombre"] : ''; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="apellidos" placeholder="Apellidos" value="<?php echo !empty($_SESSION['usuario']) ? $_SESSION['usuario']['apellidos'] : '';?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="email" name="email" placeholder="Correo Electrónico*" value="<?php echo !empty($_SESSION['usuario']) ? $_SESSION["usuario"]["email"] : ''; ?>" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="password" placeholder="Contraseña*" value="<?php echo !empty($_SESSION['usuario']) ? $_SESSION["usuario"]["password"] : ''; ?>" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="password" name="password2" placeholder="Repite Contraseña*" value="<?php echo !empty($_SESSION['usuario']) ? $_SESSION["usuario"]["password"] : ''; ?>" required></td>
                </tr>
                <tr>
                    <td><label for="fichero">Foto de Perfil (max 1 MB):</label></td>
                    <td><input type="file" name="fichero" id="fichero"></td>
                </tr>

                <tr>
                    <td colspan="2" style="align-items='center'">
                        <p><button class="botonSubmit" type="submit" name="submit" value="alta">Alta de nuevo usuario</button></p>
                    </td>
                </tr>
            </table>
            <?php
            if(isset($errorEmail)){
                print "<p class='error'>$errorEmail</p>";
            }
            if(isset($errorPassword)){
                print "<p class='error'>$errorPassword</p>";  
            }

            

            if(isset($dataOK) && $dataOK==true){
                print "<p class='exito'>Alta de usuario correcta</p>";
                unset($_SESSION['dataOK']);
            }
            ?>
        </form>

    </div>

</main>
    
</body>
</html>