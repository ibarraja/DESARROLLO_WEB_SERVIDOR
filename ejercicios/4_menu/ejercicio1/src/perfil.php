<?php
require_once('modelo.php');
session_start();
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
<?php

if (isset($_SESSION['user'])) {

    $usuario = $_SESSION["user"];

    print "<table border='1'>";
    print "<tr>";
    print "<th>Imagen</th>";
    print "<th>Nombre</th>";
    print "<th>Apellido</th>";
    print "<th>Email</th>";
    print "</tr>";
    print "<tr>";
    print "<td><img src='../bbdd/$usuario->imagen' alt='foto perfil'></td>";
    print "<td>$usuario->nombre</td>";
    print "<td>$usuario->apellidos</td>";
    print "<td>$usuario->email</td>";
    print "</tr>";
    print "</table>";
} else {
    echo "Necesitas estar logeado para mostrar el perfil";
    //header("Location: ./index.php");
}


?>
</main>
</body>
</html>