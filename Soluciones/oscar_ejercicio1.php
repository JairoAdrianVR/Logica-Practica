<?php 
    

    function ordenarPacientesConBubble($arr, $criterio){
        if(count($arr) <= 1 ) return "Dame un array con cositas para ordenar.";

        

        for($i = 0; $i < count($arr); $i++){

            for($j = 0; $j+1 < count($arr); $j++ ){
                if($arr[$j][$criterio] > $arr[$j +1 ] [$criterio]){
                    $aux = $arr[$j];
                    $arr[$j] = $arr[$j +1 ];
                    $arr[$j + 1 ] = $aux;
                }
            }
        }
    


        return $arr;
    }

    
   $pacientes = [
    [
        "nombre" => "Juan Perez",
        "turno" => 3,
        "gravedad" => 2
    ],
    [
        "nombre" => "Ana Gomez",
        "turno" => 1,
        "gravedad" => 3
    ],
    [
        "nombre" => "Luis Torres",
        "turno" => 2,
        "gravedad" => 1
    ]
];


        
print_r(ordenarPacientesConBubble($pacientes, "gravedad"));

$personas = [];

$persona1 = (object)[
    'nombre' => 'Ana',
    'edad' => 25
];

$persona2 = (object)[
    'nombre' => 'Luis',
    'edad' => 30
];

$personas[] = $persona1;
$personas[] = $persona2;

print_r($personas[0]->nombre);




    /*function ordenarPacientesConInsertion($arr, $criterio){
        if(count($arr) <= 1 ) return "Dame un array con cositas para ordenar.";


        for($i = 1; $i < count($arr); $i++){
            $aux = $arr[$i];
            $j = $i-1;

            //ACA ADENTRO VA TODA LA MAGIA
            while($j > 0 && $arr[$j] > $aux){
                //LOGICA
            }


        }

    }*/