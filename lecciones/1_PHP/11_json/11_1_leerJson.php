<?php

$file ="./bbdd/post_1.json";
$jsondata = file_get_contents($file,FILE_USE_INCLUDE_PATH);

//Array:
$un_post = json_decode($jsondata,true); 

//Objeto:
// $un_post = json_decode($jsondata); 

echo "Tipo de dato: ";
print gettype($un_post);

imprimirTitulo($un_post);
imprimirPost($un_post);
imprimirImagen($un_post);
imprimirFecha($un_post);

function imprimirPost ($noticia){

    // si es objeto:
    if(is_object($noticia)){
        echo("<h2>{$noticia->title->es}</h2>");
        echo("{$noticia->description->es}");
        echo("<hr>");
        echo("<h2>{$noticia->title->en}</h2>");
        echo("{$noticia->description->en}");

    };

    //si es array:
    if (is_array($noticia)){
        echo ("<h2>{$noticia["title"]["es"]}</h2>");
        echo ("{$noticia["description"]["es"]}");
        echo ("<hr>");
        echo ("<h2>{$noticia["title"]["en"]}</h2>");
        echo ("{$noticia["description"]["en"]}"); 
    };
}

function imprimirFecha($noticia){

    //Si es array
    if (is_array($noticia)){
        $fecha = $noticia["date"];
    }

    //Si es un objeto
    if(is_object($noticia)){
        $fecha = $noticia->date;
    }

    echo ("<footer>".date('d/m/Y',$fecha)."</footer>");
}

function imprimirTitulo($noticia){
    //Si es array
    if (is_array($noticia)){
        $titulo = $noticia["title"]["es"];
    }

    //Si es un objeto
    if(is_object($noticia)){
        $titulo = $noticia->title->es;
    };

    echo ("<h1>Titulo (Castellano): $titulo</h1>");
}

function imprimirImagen($noticia){
    //Si es array
    if (is_array($noticia)){
        $src = $noticia["image"];
    }

    //Si es un objeto
    if(is_object($noticia)){
        $src = $noticia->image;
    }

    echo "<img src=$src alt='Imagen de playa' width=auto>";
}