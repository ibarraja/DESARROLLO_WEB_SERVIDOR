<?php
session_start();
require_once(__DIR__ . '/../includes/funciones.php');

if(isset($_SESSION["mensajeBorrado"])){
    
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = recoge("nombre");
    $apellidos = recoge("apellidos");
    


    if($nombre == ""){
        $_SESSION["errorNombre"] = "El nombre no puede estar vacío";
    }

    if($apellidos == ""){
        $_SESSION["errorApellidos"] = "Los apellidos no puede estar vacío";
    }

    if(!isset($_SESSION["errorApellidos"]) and !isset($_SESSION["errorNombre"])){
        $pdo = conectaDb();

        if($pdo != null){
            $consulta = "INSERT INTO $cfg[nombretabla]
                         (nombre,apellidos)
                         VALUES (:nombre, :apellidos)
            ";

            $resultado = $pdo->prepare($consulta);
            if(!$resultado){
                $_SESSION["errorBBDD"] = "<p>Error en la cunsulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>";
            } elseif (!$resultado->execute([":nombre" => $nombre, ":apellidos" => $apellidos])){
                $_SESSION["errorBBDD"] = "<pError al ejecutar la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>";

            } else {
                $_SESSION["insertarOK"] = true;
                $pdo = null;
            }
        } else {
            $_SESSION["errorBBDD"] = "PDO es null";
        }
        

    } 
    header("Location: " . APP_FOLDER . "/insertar-1.php");
    exit();
} else {
    header("Location: " . APP_FOLDER . "/index.php");
    exit();
}
