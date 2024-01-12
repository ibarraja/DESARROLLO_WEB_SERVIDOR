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
    $listaUsuarios = [];

    $file = 'data.json';

    $jsonData = file_get_contents("../bbdd/{$file}");
    $listaUsuarios = json_decode($jsonData);

    echo 'Total de usuarios: ' . count($listaUsuarios);
    ?>

</main>
    
</body>
</html>