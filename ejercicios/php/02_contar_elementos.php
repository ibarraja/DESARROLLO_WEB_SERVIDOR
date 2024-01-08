<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Ejercicio: Contar el numero de elementos repetidos que hay en el siguiente array usando un array asociativo:
        //ARRAY: [3,5,5,4,2,3,5]
        function contarElementos($matriz){
            $apariciones=0;
            $repeticiones = [];
            foreach($matriz as $elemento){
                foreach($matriz as $e){
                    if ($elemento==$e){
                        $apariciones++;
                    }
                    $repeticiones[$elemento]=$apariciones;
                }
                $apariciones = 0;
            }
            return $repeticiones;

        }

        $m =[3,5,5,4,2,3,5];
        print "<pre>\n"; print_r($m); print "</pre>\n";
        print "<pre>\n"; print_r(contarElementos($m)); print "</pre>\n";


        
        
        ?>
</body>
</html>