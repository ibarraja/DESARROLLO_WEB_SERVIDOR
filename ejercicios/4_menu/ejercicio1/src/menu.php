<nav>
    <ul>
        <li class="left"><a href="indexH.php">Home</a></li>
        <li class="left"><a href="alta.php">Alta</a></li>

        <?php
        if (isset($_SESSION['usuarioObjeto'])){

        }else{
            echo "<li class='right'><a class='menu2' href='login.php'>Login</a></li>";
        }
        ?>

    </ul>
</nav>