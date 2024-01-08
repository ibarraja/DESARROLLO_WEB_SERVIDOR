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
                <input type="submit" value="Acceder" id="login">
            </form>
        </div>
    </header>
    <main>
    <div class="register">
        <h1>Usuario registrado correctamente</h1>
        <?php
        session_name("alta");
        session_start();
        if (isset($_SESSION["name"])){
            echo "<h2>Bienvenido ".$_SESSION["name"]."</h2>";
            unset($_SESSION['name']);
        } else {
            echo "<h2>Bienvenido</h2>";

        }
        ?>
    </div>
    </main>
    <footer>
        <p>©️ Javier Ibarra2023 </p>
    </footer>
</body>
</html>