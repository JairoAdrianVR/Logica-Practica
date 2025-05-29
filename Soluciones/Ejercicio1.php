<?php 
    /* Ejercicio 1: 
        Tenemos una LISTA de pacientes que se han registrado en la sala de emergencias de un hospital
        Vamos a ordenar esos pacientes por dos criterios:

        - Numero de turno (orden ascendente) - NUMERO ENTERO 
        - Gravedad del paciente (orden ascendente) - NUMERO ENTERO

        ** Datos de Entrada:
        [
         {
            "nombre": "Juan Perez",
            "turno": 3,
            "gravedad": 2
        },
        {
            "nombre": "Ana Gomez",
            "turno": 1,
            "gravedad": 3
        },
        {
            "nombre": "Luis Torres",
            "turno": 2,
            "gravedad": 1
        }
        ]

        ** Datos de Salida:
        criterio = "turno"
        [
            {
                "nombre": "Ana Gomez",
                "turno": 1,
                "gravedad": 3
            },
            {
                "nombre": "Luis Torres",
                "turno": 2,
                "gravedad": 1
            },
            {
                "nombre": "Juan Perez",
                "turno": 3,
                "gravedad": 2
            }
        ]

        
    */

    function ordenarPacientesConBubble($arr, $criterio){
        if(count($arr) <= 1 ) return "Dame un array con cositas para ordenar.";
        for($i = 0; $i < count($arr); $i++){

            for($j = 0; $j < count($arr) -1 ; $j++ ){
                if($criterio == "turno"){
                    if($arr[$j][$criterio] > $arr[$j+1][$criterio]){
                        $aux = $arr[$j];
                        $arr[$j] = $arr[$j+1];
                        $arr[$j+1] = $aux;
                    }
                }               
            }
        }
        return $arr;
    }

    $listaPacientes = [
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
    // Ordenar por turno
    // Se ordena de numero menos a mayor.
    $listaOrdenada = ordenarPacientesConBubble($listaPacientes, "turno");
    print_r($listaOrdenada);


    
    function ordenarPacientesConInsertion($arr, $criterio){
        if(count($arr) <= 1 ) return "Dame un array con cositas para ordenar.";


        for($i = 1; $i < count($arr); $i++){
            $aux = $arr[$i];
            $j = $i-1;

            //ACA ADENTRO VA TODA LA MAGIA
            while($j > 0 && $arr[$j] > $aux){
                //LOGICA
            }


        }

    }


?>