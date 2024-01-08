<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta</title>
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <header>
        <div class="head">
            <form action="alta.php">
                <!-- <label for="login">¿Ya estás registrado?</label> -->
                <input type="submit" value="¿No tienes cuenta? Registrarse" id="register">
            </form>
        </div>
    </header>
    <main>
    <div class="register">
        <h1>Iniciar sesión</h1>
       

        <form action="procesar_login.php" method="post">
            
            <label for="email">
                <i class="fas fa-at"></i>
            </label>
            <input type="text" name="email" placeholder="Email*" id="username" required>

            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password"
            placeholder="Contraseña*" id="password" required>

            <input type="submit" value="Acceder">
        </form>
    </div>
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