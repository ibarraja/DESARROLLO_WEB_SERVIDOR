<?php
session_start();
require_once (__DIR__ . "/../includes/funciones.php");

if (
    isset($_SESSION["listar"]) or
    isset($_SESSION["modificar"]) or
    isset($_SESSION["borrar"])
    ){
        $pdo = conectaDb();
        $consulta = "SELECT * FROM $cfg[nombretabla]";


        $resultado = $pdo->query($consulta);

        if (!$resultado){
            $_SESSION["errorBBDD"] = "<p>Error en la cunsulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>";
        } else {
            $listaPersonas = array();

            foreach ($resultado as $registro){
                $persona = array ("id" => $registro["id"], "nombre" => $registro["nombre"], "apellidos" => $registro["apellidos"]);
                array_push($listaPersonas, $persona);
            }
            $_SESSION["listaPersonas"] = $listaPersonas;
        }

        if (isset($_SESSION["listar"])){
            unset($_SESSION["listar"]);
            header("Location: " . APP_FOLDER . "/listar.php");
        }
    } else {
        header ("Location: " . APP_FOLDER . "/index.php");
    }