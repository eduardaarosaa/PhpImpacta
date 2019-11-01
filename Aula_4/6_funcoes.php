<?php


    function mostraTexto(){
        //Uma função é uma rotina, que executa quando é chamado.
        echo "Ola usuario";
    }

        mostraTexto();

    echo "<br>";

    function somar(){
        $x = 10; 
        $y = 5;


        echo $x + $y;
    }


    somar();
    echo "<br>";

    //funções com paramentros
    
    function somar1($x, $y){
       


        echo $x + $y;
    }


    somar1(58,12);


    echo "<br>";