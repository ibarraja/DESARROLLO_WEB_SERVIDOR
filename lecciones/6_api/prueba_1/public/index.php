<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// header("Content-Type: text/plain; charset=UTF-8");

header("Access-Control-Allow-Methods: OPTIONS, GET, POST, PUT, DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

header("HTTP/1.1 200 OK Content-Type: application");
// header("HTTP/1.1 404 Not Found");
// header("HTTP/1.1 100 Hello");
// echo 'hola api';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode("/", $uri);


// ---------- MOSTRAR DATOS EN CONSOLA ----------
$requestMethod = $_SERVER["REQUEST_METHOD"];

// file_put_contents("php://stdout", "\nUri[0]: $uri[0]\n");
// file_put_contents("php://stdout", "\nUri[1]: $uri[1]\n");
// file_put_contents("php://stdout", "\nUri[2]: $uri[2]\n");
// file_put_contents("php://stdout", "\nRequest Method: $requestMethod\n");

if ($uri[1] !== 'empleados'){
    header('HTTP/1.1 404 Not Found');
    exit();
}

// Miramos a ver si hay userid en el endpoint:
$userId = null;
if (isset($uri[2])){
    $userId = (int) $uri[2];
}


switch ($requestMethod){
    case 'GET': 
        if($userId != null){
            //Aqui tendria que conectar con la bbdd para obtener el empleado con dicho id

            $body = "Persona con id " . $userId;
            header('HTTP/1.1 200 OK');
            echo json_encode($body);
            exit();
        } else {
            // Tendríamos que conectarnos a la bbdd y devolver lista empleados
            $body = "Lista de empleados";
            header('HTTP/1.1 200 OK');
            echo json_encode('Lista emplados');
            exit();
        }

    default:
        header('HTTP/1.1 404 Not Found');
        exit();
}


exit();
