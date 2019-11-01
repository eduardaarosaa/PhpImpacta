<?php

    //9_variaveis_servidor.php

    echo '<pre>';

    //Tras os dados do servidor, 
    print_r($_SERVER);

    echo '</pre>';

    echo "IP:" . $_SERVER['REMOTE_ADDR'];

    echo "<br>";

    echo "Navegador:" . $_SERVER['HTTP_USER_AGENT'];





?>