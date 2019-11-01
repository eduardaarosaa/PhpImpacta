
<?php

    $cores = [ "red", "green", "blue"];


    var_dump($cores);

    echo "<hr>";

    //exibe a cor green;  
    echo $cores[1];

    echo "<hr>";

    //for lendo array 

    for($i=0; $i<count($cores); $i++){

        echo $cores[$i] . "<br>";

    }
    echo "<hr>";

    //array nomenativo
    $honda["moto"] = "SH300";
    $honda["aviao"] = "Honda Jet";
    $honda["nautica"] = "HP500";
    $honda["carro"] = "Civic";

    //forech lendo o array
    foreach ($honda as $row){
        echo $row . "<br>";
    }

    echo "<hr>";

    foreach($honda as $row=>$valor){

        echo $row . ' = ' . $valor . "<br>"; 
    }

    $habilidades = "css#html#php#js";

    $arr = explode('#', $habilidades);

    var_dump($arr);

    echo "<hr>";
    
    //transformando um array em String
    $string = implode(", ", $honda);

    var_dump($string);

    

?>