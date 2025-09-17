<?php
//Respuesta: 1 La capital de ITALIA es ROMA
$paises = ["Italy"=>"Rome", 
        "Luxembourg"=>"Luxembourg", 
        "Belgium"=> "Brussels", 
        "Denmark"=>"Copenhagen", 
        "Finland"=>"Helsinki", 
        "France" => "Paris", 
        "Slovakia"=>"Bratislava", 
        "Slovenia"=>"Ljubljana", 
        "Germany" => "Berlin", 
        "Greece" => "Athens", 
        "Ireland"=>"Dublin", 
        "Netherlands"=>"Amsterdam", 
        "Portugal"=>"Lisbon", 
        "Spain"=>"Madrid", 
        "Sweden"=>"Stockholm", 
        "United Kingdom"=>"London", 
        "Cyprus"=>"Nicosia", 
        "Lithuania"=>"Vilnius", 
        "Czech Republic"=>"Prague", 
        "Estonia"=>"Tallin", 
        "Hungary"=>"Budapest", 
        "Latvia"=>"Riga", 
        "Malta"=>"Valetta", 
        "Austria" => "Vienna", 
        "Poland"=>"Warsaw"];

ksort($paises); // Ordenar por clave (nombre del país)
foreach($paises as $key => $value){
    echo "La capital de ".strtoupper($key)." es ".strtoupper($value)."\n";
}
echo json_encode($paises, JSON_PRETTY_PRINT);
