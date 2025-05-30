<?php 
    /* Ejercicio 1: 
        Tenemos una LISTA de pacientes que se han registrado en la sala de emergencias de un hospital
        Vamos a ordenar esos pacientes por dos criterios:

        - Numero de criterio (orden ascendente) - NUMERO ENTERO 
        - Gravedad del paciente (orden ascendente) - NUMERO ENTERO

        ** Datos de Entrada:
        [
         {
            "nombre": "Juan Perez",
            "criterio": 3,
            "gravedad": 2
        },
        {
            "nombre": "Ana Gomez",
            "criterio": 1,
            "gravedad": 3
        },
        {
            "nombre": "Luis Torres",
            "criterio": 2,
            "gravedad": 1
        }
        ]

        ** Datos de Salida:
        criterio = "criterio"
        [
            {
                "nombre": "Ana Gomez",
                "criterio": 1,
                "gravedad": 3
            },
            {
                "nombre": "Luis Torres",
                "criterio": 2,
                "gravedad": 1
            },
            {
                "nombre": "Juan Perez",
                "criterio": 3,
                "gravedad": 2
            }
        ]

        
    */
$arrayzote=[
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
    ],

    [
        "nombre" => "Jasson",
        "turno" => 5,
        "gravedad" => 1
    ],
    [
        "nombre" => "Pepito Fuentes",
        "turno" => 4,
        "gravedad" => 1
    ],
  

];

//echo $arrayzote[0]["nombre"]; acceder a un array en especifico
    function ordenarPacientesConBubble($arr, $criterio){
        if(count($arr) <= 1 ) return "Dame un array con cositas para ordenar.";

        $n =count($arr); // declaro variable n "me gusta más asi" -> n cuenta el numero de elementos que hay en mi array

        for($i = 0; $i < $n; $i++){
            print("este es el bucle i \n");
            for($j = 0; $j+1 < $n ; $j++ ){
                //ACA VA LA SOLUCION

                if ($arr[$j][$criterio] > $arr[$j+1][$criterio]){ // si el array en la posicion j, en el dato criterio es mayor a al dato criterio en array en el indice siguiente:
                    
                    $aux = $arr[$j];      // solo intercambio los indices completos, porque si hago $arr[$j][$criterio]; solo estaria cambiando criterio y me da error
                    $arr[$j]= $arr[$j+1]; // si solo intercambio los indices completos, cambio el lugar de las personas
                    $arr[$j+1]= $aux;

                }

            }
        }
        return $arr;
    }

// print_r($arrayzote);
ordenarPacientesConBubble($arrayzote, "turno"); // dentro de los datos, no se coloca $Arrayzote["criterio poraue lo detecta solo como un criterio"]
print_r(ordenarPacientesConBubble($arrayzote, "turno"));





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