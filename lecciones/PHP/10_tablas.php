<?php

function lista_a_tabla_html($lista){
    $s = '<table border="1">';

    $s .= '<tr>';
    foreach ($lista as $elemento){
        $s .= '<td>' . $elemento . '</td>'; 
    }

    $s .= "</tr></table>";
    return $s;
}

function matriz_a_tabla_html($matriz){
    $s = '<table border="1">';
    $s .='<thead><tr>';
    foreach ($matriz[0] as $key => $value){
        $s .= '<th>'.$key.'</th>';
    }
    $s .= '</tr></thead>';

    foreach($matriz as $elemento){
        $s .= '<tr>';
        foreach($elemento as $valor){
            $s .= '<td>'. $valor . '</td>';
        }
        $s .='</tr>';
    }
    $s .= '</table>';
    return $s;
}

$lista = [2, 6, 6, 5, 1, 0, 3, 4, 5];
$matriz = [
    [
        'Nombre' => 'Mauro',
        'Apellido' => 'Chojrin',
        'Correo' => 'mauro.chojrin@leewayweb.com',
    ],
    [
        'Nombre' => 'Alberto',
        'Apellido' => 'Loffatti',
        'Correo' => 'aloffatti@hotmail.com',
    ],
    [
        'Nombre' => 'Foo',
        'Apellido' => 'Bar',
        'Correo' => 'foo_bar@example.com',
    ]
];


print lista_a_tabla_html($lista);

echo "<br>";

print matriz_a_tabla_html($matriz);




