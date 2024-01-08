<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header>
        <div class="head">
            <form action="login.php">
                <!-- <label for="login">¿Ya estás registrado?</label> -->
                <input type="submit" value="¿Ya tienes cuenta? Acceder" id="login">
            </form>
        </div>
    </header>
    <main>
    <div class="register">
        <h1>Registrarse</h1>

        <form action="procesar_alta.php" method="post" enctype="multipart/form-data">
            <!-- nombre -->
            <label for="nombre">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="nombre" placeholder="Nombre" id="nombre" >
            
            <!-- apellido -->
            <label for="apellido">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="apellido" placeholder="Apellidos" id="apellido" >
            
            <!-- telefono -->
            <label for="phone">
                <i class="fas fa-phone"></i>
            </label>
            <input type="text" name="phone" placeholder="Telefono" id="phone">
            
            <!-- email -->
            <label for="email">
                <i class="fas fa-at"></i>
            </label>
            <input type="text" name="email" placeholder="Email*" id="username" required>

            <!-- contraseña -->
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password"
            placeholder="Contraseña*" id="password" required>
            
            <!-- repite contraeña -->
            <label for="rePassword">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="rePassword" placeholder="Repite contraseña*" id="rePassword" required>
            
            <!-- Imagen -->
            <label for="image">
                <i class="fas fa-image"></i>
            </label>
            <input type="file" name="imagen" id="tFileImagen">
            <label for="tFileImagen">Elije un archivo</label>

            <input type="submit" value="Acceder">
        </form>
    
    </div>
    <!-- Muestra mensajes de error aquí -->
    <div class="errors">
        <?php
        
        session_name("alta");
        session_start(); // Inicia la sesión si aún no está iniciada
        if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error) {
                echo "<p>$error</p>";
            }
            unset($_SESSION['errors']); // Limpia los errores después de mostrarlos
        }
        // session_write_close();
        ?>
    </div>
    </main>
    <footer>
        <p>©️ Javier Ibarra 2023 </p>
    </footer>
</body>
</html>