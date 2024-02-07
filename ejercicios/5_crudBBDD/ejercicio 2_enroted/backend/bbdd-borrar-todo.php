<?php
session_start();
require_once(__DIR__ . "/../includes/funciones.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $borrar = recoge("borrar");
}

if ($borrar == "Si"){
    $pdo = conectaDb();
    
    
    if ($pdo != null) {
        $mensaje = borraTodo();
    
        $_SESSION["mensajeBorrarTodo"] = $mensaje;
    
    } else {
        $_SESSION["mensajeBorrarTodo"] = "<p class='error'>ERROR en la conexión con la base de datos. PDO es nulo</p>";
    }
    
    header("Location: ". APP_FOLDER . "/borrar-todo-1.php");
    exit();

} else {
    header("Location: " . APP_FOLDER . "/index.php");
    exit();
}
