<?php
    $array = [];
    //defino el array
    if(isset($_POST['listaOculta'])){
        $array = $_POST['listaOculta'];
        
    } else {
        $array = [];
    }

    function crearMatriz($t,$min,$max){
    
        global $array;
        //Crear el array
        for ($i = 0; $i < $t; $i++) {
            $numeroRandom = rand($min,$max);
            $array[] = $numeroRandom;
        }
    }

    function matrizTabla($array){

        //Crear la tabla html
        echo "<table border='1'><tr>";
        for($i = 0; $i < count($array); $i++){
            echo "<td>".$array[$i]."</td>";
        }
        echo "</tr></table>";
    }
    function borrarValor($n){
        global $array;
        for($i = 0; $i <= count($array); $i++){
            if($n == $array[$i]){
                unset($array[$i]);
            }
        }
        $array= array_values($array);
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>F03_GESTOR DE MATRICES</h1>
    </header>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table>
            <tr>
                <td>Tamaño de lista:</td>
                <td><input type="number" name="tamaño" min="1" value="10"></td>
            </tr>
            <tr>
                <td>Valor mínimo:</td>
                <td><input type="number" name="minimo" min="0" value="0"></td>
            </tr>
            <tr>
                <td>Valor máximo:</td>
                <td><input type="number" name="maximo" min="1" value="9"></td>
            </tr>
        </table>
    
        <p>
            <button type="submit" name="submit" value="generarLista">GENERAR LISTA</button>
            <button type="submit" name="submit" value="resetearDatos">RESETEAR DATOS</button>
        </p>

        <hr>
        <?php
        
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                // Pulsar Boton GENERAR LISTA
                if($_POST["submit"] == "generarLista"){
                    if(isset($_POST["listaOculta"])){
                        $array =[];
                    }
                    $tamaño = $_POST["tamaño"];
                    $minimo = $_POST["minimo"];
                    $maximo = $_POST["maximo"];
                    
                    crearMatriz($tamaño,$minimo,$maximo);
                    foreach ($array as $value) {
                        echo '<input type="hidden" name="listaOculta[]" value="' . $value . '">';
                    }
                    
                }
                
                //Pulsar Boton RESETEAR DATOS
                if($_POST["submit"] == "resetearDatos"){
                    $array = [];
                    
                    // echo "Lista con ". count($array) . " elementos <br><br>";
                    // foreach ($array as $value) {
                    //     echo '<input type="hidden" name="listaOculta[]" value="' . $value . '">';
                    // }
                }

                // //Pulsar Boton BORRAR VALOR
                // if($_POST["submit"] == "borrarElemento"){
                //     $num = $_POST["borrarNumero"];
                //     borrarValor($num);
                // }

                //Pulsar Boton BORRAR VALOR
                if($_POST["submit"] == "borrarElemento"){
                    $num = $_POST["borrarNumero"];
                    borrarValor($num);
                    foreach ($array as $value) {
                        echo '<input type="hidden" name="listaOculta[]" value="' . $value . '">';
                    }
                }

                //Pulsar Boton BORRAR PRIMERO
                if($_POST["submit"] == "borrarPrimero"){
                    unset($array[0]);
                    $array= array_values($array);
                    // matrizTabla($array);
                    foreach ($array as $value) {
                        echo '<input type="hidden" name="listaOculta[]" value="' . $value . '">';
                    }
                }
                
                //Pulsar Boton BORRAR ULTIMO
                if($_POST["submit"] == "borrarUltimo"){
                    unset($array[count($array)-1]);
                    $array = array_values($array);
                    foreach ($array as $value) {
                        echo '<input type="hidden" name="listaOculta[]" value="' . $value . '">';
                    }
                }
            }
            echo "Lista con ". count($array) . " elementos";
            matrizTabla($array);
            
        ?>
        <p>
            <button type="submit" name="submit" value="borrarElemento">BORRAR VALOR</button>
            <button type="submit" name="submit" value="borrarPrimero">BORRAR PRIMERO</button>
            <button type="submit" name="submit" value="borrarUltimo">BORRAR ÚLTIMO</button>
        </p>
        <p>Valor a eliminar: <input type="number" name="borrarNumero" min="0" value="0"></p>
        
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                

                
            }
        ?>


        </form>
    </main>
</body>
</html>