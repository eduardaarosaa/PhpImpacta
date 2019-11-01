<?php

$a['sp'] = array("Santos", "Campos", "Itu", "Jau");

$a['rj'] = array("Buzios", "Niteroi", "Parati");


foreach ($a as $key => $valor) {
    echo $key . '<br>';
    foreach ($valor as $x => $y) {

        echo "$y,";
    }
    echo '<br>';
}
