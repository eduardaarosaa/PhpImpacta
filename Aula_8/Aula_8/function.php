<?php

function somar($x,$y){
    return $x + $y;

}

function conecta($banco="agenda", $host="localhost", $user="root", $senha="impacta"){
$conn = mysqli_connect($host,$user, $senha ,$banco) or

die("Desculpe-nos estamos passando por um problema no momento.");

    if($conn)

       return $conn;


}


function desconecta($link){

    mysqli_close($link);

}