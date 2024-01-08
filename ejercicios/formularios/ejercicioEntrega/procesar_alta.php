<?php

session_name("alta");
session_start();

include 'modelo.php';
include './util/funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Obtener datos del formulario
    $nombre = recoge("nombre");
    $apellidos = recoge("apellido");
    $telefono = recoge("phone");
    $email = recoge("email");
    $password = recoge("password");
    $repite_password = recoge("rePassword");
    
    
    //Creo variables de sesion para recoger los errores:
    $_SESSION['errors'] = [];
    
    //---------------------------------------------------------------------------------------------
    // // Obtener el nombre del archivo y la ubicación temporal
    // $imagen_nombre = $_FILES['imagen']['name'];
    // $imagen_temp = $_FILES['imagen']['tmp_name'];

    // // Verificar si el archivo de imagen se cargó correctamente
    // if (empty($imagen_nombre) || !is_uploaded_file($imagen_temp)) {
    //     $_SESSION['errors'][] = "Error al cargar la imagen. Por favor, intenta de nuevo.";
    //     header("Location: alta.php");
    //     exit();
    // }

    // // Directorio donde se guardarán las imágenes
    // $directorio_imagenes = "./bbdd/";

    // // Mover la imagen al directorio de imágenes
    // $ruta_imagen = $directorio_imagenes . $imagen_nombre;
    // if (!move_uploaded_file($imagen_temp, $ruta_imagen)) {
    //     $_SESSION['errors'][] = "Error al guardar la imagen. Por favor, intenta de nuevo.";
    //     header("Location: alta.php");
    //     exit();
    // }
    
    //---------------------------------------------------------------------------------------------

    // Validar los datos (contraseñas coincidan y el email sea válido)
    if ($password !== $repite_password) {
        $_SESSION['errors'][] = "Las contraseñas no coinciden. Vuelve a intentarlo.";
        header("Location: alta.php");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errors'][] = "La dirección de correo electrónico no es válida. Por favor, ingresa una dirección de correo válida.";
        header("Location: alta.php");
        exit();
    } else {
        // Leer usuarios existentes desde el archivo JSON
        $file = "./bbdd/data.json";
        $usuarios = [];
        if (file_exists($file)) {
            $usuarios = json_decode(file_get_contents($file), true);
        }

        // Verificar si el correo electrónico ya está registrado
        foreach ($usuarios as $usuario) {
            if ($usuario["email"] === $email) {
                $_SESSION['errors'][] = "El correo electrónico ya está registrado. Por favor, usa otro correo electrónico.";
                header("Location: alta.php");
                exit();
            }
        }

        // if (isset($_FILES["imagen"])){
        //     // Directorio donde se guardarán las imágenes
        //     $directorio_imagenes = "./modules/";
        //     $imagen_destinada = $directorio_imagenes . basename($_FILES["imagen"]["name"]);
        // }
        // Crear un nuevo usuario
        $nuevoUsuario = new Usuario();
        $nuevoUsuario->nombre = $nombre;
        $nuevoUsuario->apellidos = $apellidos;
        $nuevoUsuario->email = $email;
        $nuevoUsuario->password = $password; 
        $nuevoUsuario->imagen = $ruta_imagen;
        
        // Añadir el nuevo usuario al array de usuarios y hacer encode
        $usuarios[] = $nuevoUsuario;
        file_put_contents($file, json_encode($usuarios,JSON_PRETTY_PRINT));

        // Redireccionamiento a web con mensaje ok
        $_SESSION["name"] = $nombre;
        header("Location: altaCompletada.php");
        
        exit();


    }
} else {
    print "Acceso no autorizado.";

    print "<p><a href='./alta.php'>Volver a alta.php</a></p>";
}

?>
