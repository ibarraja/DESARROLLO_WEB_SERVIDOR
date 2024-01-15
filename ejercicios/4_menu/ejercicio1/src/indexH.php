<?php
require_once('modelo.php');
session_start();
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
    <?php 
    $listaUsuarios = [];

    $file = 'data.json';

    $jsonData = file_get_contents("../bbdd/{$file}");
    $listaUsuarios = json_decode($jsonData);

    print "<div class='indice'><p>Total de usuarios: <strong>" . count($listaUsuarios) . "</strong></p>";

    if(isset($_COOKIE['ultimo_usuario']) and isset($_COOKIE['ultimo_usuario_fecha'])){
        $cookie_usuario = $_COOKIE['ultimo_usuario'];
        $cookie_fecha = $_COOKIE['ultimo_usuario_fecha'];
        print '<p>Último usuario registrado: <strong>'. $cookie_usuario . '</strong> Registrado el: <strong>' . $cookie_fecha .'</strong></p>';
    }

    print '</div>';
    ?>

</main>
    
</body>
</html>