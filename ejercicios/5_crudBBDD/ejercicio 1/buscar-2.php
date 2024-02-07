<?php
require_once ("funciones.php");

// if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST'){
//     print ('<pre>');
//     print_r($_POST);
//     print ('</pre>');
// }

$nombre = recoge('nombre');
$apellidos = recoge('apellidos');

$nombreOK    = true;
$apellidosOK = true;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>CRUD personas</title>
</head>

<body>
    <?php cabecera("Buscar 2", MENU_VOLVER); ?>
    <main>
        <?php
         
         if (!$nombreOK) {
             print "<p class='aviso'>Error en el nombre</p>";
         }
         if (!$apellidosOK) {
             print "<p class='aviso'>Error en los apellidos</p>";
         }
         $resultado = '';
         if ($nombreOK  && $apellidosOK) {
            $pdo = conectaDb();
            if($nombre != '' && $apellidos != '') {
                $consulta = "SELECT * 
                             FROM $cfg[nombretabla]
                             WHERE nombre = '$nombre' AND apellidos = '$apellidos';
                            ";

                $resultado = $pdo->query($consulta);


            } elseif($nombre != '' && $apellidos == ''){
                $consulta = "SELECT * 
                             FROM $cfg[nombretabla]
                             WHERE nombre = '$nombre';
                            ";

                $resultado = $pdo->query($consulta);


            } elseif($nombre == '' && $apellidos != ''){
                $consulta = "SELECT * 
                             FROM $cfg[nombretabla]
                             WHERE apellidos = '$apellidos';
                            ";
                $resultado = $pdo->query($consulta);
            } else {
                print '<p class=\"aviso\">Error: no has introducido ningun campo de busqueda.</p>';
                print "<p><button><a href=\"./index.php\">Volver al menú principal</a></button></p>";
            }
            if ($resultado != ''){
                if (!$resultado) {
                    print "    <p class=\"aviso\">Error en la consulta. SQLSTATE[{$pdo->errorCode()}]: {$pdo->errorInfo()[2]}</p>\n";
                } else {
                    
                    if($resultado->rowCount() == 0){
                        print "<p class=\"aviso\">Error en la consulta. No concuerda la busqueda con ninguna persona registrada</p>";
                    }else {
                        print "    <p>Listado completo de registros:</p>\n";
                        print "\n";
                        print "    <table class=\"conborde franjas\">\n";
                        print "      <thead>\n";
                        print "        <tr>\n";
                        print "          <th>Nombre</th>\n";
                        print "          <th>Apellidos</th>\n";
                        print "        </tr>\n";
                        print "      </thead>\n";
                        foreach ($resultado as $registro) {
                            print "      <tr>\n";
                            print "        <td>$registro[nombre]</td>\n";
                            print "        <td>$registro[apellidos]</td>\n";
                            print "      </tr>\n";
                        }
                        print "    </table>\n";

                    }
                }
             }

            }
        ?>
    </main>


