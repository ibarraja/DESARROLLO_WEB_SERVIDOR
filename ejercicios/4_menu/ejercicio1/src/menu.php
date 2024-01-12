<nav>
    <ul>
        <li class="left"><a href="indexH.php">Home</a></li>
        <li class="left"><a href="alta.php">Alta</a></li>

        <?php
        if (isset($_SESSION['user'])) {

            // var_dump($_SESSION['user']);
            $email_usuario = $_SESSION["user"]->email;
      
            echo "<li class='right'><a class='menu' href='logout.php'>Logout</a></li>";
            echo "<li class='right'><a class='menu' href='perfil.php'>Perfil</a></li>";
            echo " <li class='right'><a class='menu2'>Hola, {$email_usuario}</a></li>";
          } else {
            echo "<li class='right'><a class='menu2' href='login.php'>Login</a></li>";
        }
        ?>

    </ul>
</nav>