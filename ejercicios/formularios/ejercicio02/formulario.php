<?php
    require_once('../../util/utilidades.php');
    function recoger_nombre(){
        $nombre = recoge("nombre");
        return $nombre;
    }

    function recoger_fecha(){
        $fecha  = recoge("fecha");
        return $fecha;
    }

    function devolver_edad($fecha){
        if(!is_null($fecha)){
            $fecha_actual = new DateTime();
            $fecha_web = new DateTime($fecha);

            $diferencia = $fecha_web -> diff($fecha_actual);
            $edad = $diferencia -> y; 
            return $edad;
        }
        return $edad = null;

    }
    

    function redirigir_datos($nombre,$edad){
         
        // if($_SERVER["REQUEST_METHOD"] == "POST"){
        //     //Nombre
        //     $nombre = recoger_nombre();
            
        //     //Calcular Edad
        //     $fecha = recoger_fecha();
        //     $edad = devolver_edad($fecha);
          
        //     //Redirigir página recibe_datos
        // }
        header("Location: recive_datos.php?nombre=".$nombre."&edad=".$edad);
    }

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css" title="Color">
  <title>FORMULARIO</title>
</head>

<body>
    <header>
        <h1>Ejercicio02</h1>
        <h2>Formulario_Calcular Edad</h2>
    </header>
    
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>Nombre:<input type="text" name ="nombre"></p>
            <p>Fecha: <input type="date" name ="fecha"  ></p>
            <p>
                <button type="submit" name="boton" value="valor1">Mostrar edad aquí</button>    
                <button type="submit" name="boton" value="valor2">Mostrar edad en PHP</button>    
            </p>
        </form>

        <?php
            if (isset($_POST["boton"])){

                //Pulsar Boton: "Mostrar edad aquí"
                if($_POST["boton"] == "valor1"){  
                    
                    //Mostrar NOMBRE
                    $nombre = recoger_nombre();
                    if(is_null($nombre)){
                        echo '<p class="error">Error: Falta el nombre</p>';
                    }else{
                        echo '<p class="correcto">Hola '. $nombre."</p>";
                    }
                    

                    //1.Recogida de fecha --> 2.Calculo de edad --> 3.Mostrar EDAD
                    //1:
                    $fecha  = recoger_fecha();
                    if(is_null($fecha)){
                        //3:
                        echo '<p class="error">Error: Falta seleccionar/introducir una fecha</p>';
                    } else {
                        //2:
                        $edad = devolver_edad($fecha);
                        //3:
                        echo '<p class="correcto">Edad: '.$edad."</p>";
                    }

                }
                //Pulsar botón mostrar en otra web
                if($_POST["boton"] == "valor2"){
                    $nombre = recoge("nombre");
                    $fecha  = recoge("fecha");
                    $edad = devolver_edad($fecha);
                    $OK = true;

                    if(is_null($nombre)){
                        echo '<p class="error">Error: Falta el nombre</p>';
                        $OK =false;
                    }

                    if(is_null($edad)){
                        echo '<p class="error">Error: Falta seleccionar/introducir una fecha</p>';
                        $OK = false;
                    }
            
                    if($OK){

                        header("Location: recibe_datos.php?nombre=".$nombre. "&edad=". $edad);
                    }
                }   
            }   
        ?>


    </main>
    
    <footer>
      <hr>
      <p>Autor: @JIM</p>
    </footer>
</body>

</html>