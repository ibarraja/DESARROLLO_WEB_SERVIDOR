<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagen"])) {
    $targetDirectory = "uploads/"; // Carpeta donde se guardarán las imágenes
    $targetFile = $targetDirectory . basename($_FILES["imagen"]["name"]);

    // Intenta subir el archivo
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $targetFile)) {
        echo "El archivo " . htmlspecialchars(basename($_FILES["imagen"]["name"])) . " ha sido subido.";

        // Guardar los datos de la imagen en un archivo JSON
        $data = [
            "nombre" => htmlspecialchars(basename($_FILES["imagen"]["name"])),
            "tipo" => $_FILES["imagen"]["type"],
            "tamaño" => $_FILES["imagen"]["size"],
            "ruta" => $targetFile
        ];

        $jsonFile = "datos_imagen.json";
        $jsonContent = json_decode(file_get_contents($jsonFile), true);
        $jsonContent[] = $data;
        file_put_contents($jsonFile, json_encode($jsonContent));

    } else {
        echo "Lo siento, hubo un error al subir tu archivo.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
