<?php

    $dias = [ ];

    $dias['Domingo'] = "#3498db";

    $dias['Segunda'] = "#9b59b6";

    $dias['Terça'] = "#1abc9c";

    $dias['Quarta'] = "#e67e22";

    $dias['Quinta'] = "#e74c3c";

    $dias['Sexta'] = "#d35400";

    $dias['Sabádo'] = "#273c75";

    foreach($dias as $row=>$valor){

        echo "<p style='color:$valor;'>" . $row . "</p>";

    }

