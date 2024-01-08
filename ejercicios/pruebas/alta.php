<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir Imagen</title>
</head>
<body>
    <h1>Subir Imagen</h1>
    <form action="procesar_alta.php" method="post" enctype="multipart/form-data">
        <label for="imagen">Selecciona una imagen:</label>
        <input type="file" name="imagen" id="imagen" required>
        <br>
        <input type="submit" value="Subir Imagen">
    </form>
</body>
</html>
