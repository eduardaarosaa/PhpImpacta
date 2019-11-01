<?php 

    //retorna o dia da semana de 0 a 6.
    $data = date('w');

    // echo $data;

    if($data == 0){
        echo 'Domingo';
    }elseif($data == 1){
        echo 'Segunda';

    }elseif($data == 2){
        echo 'Terça';
    }elseif($data == 3){
        echo 'Quarta';
    }elseif($data == 4){
        echo 'Quinta';
    }elseif($data == 5){
        echo 'Sexta';
    }else{
        echo 'Sabado';
    }

    ?>