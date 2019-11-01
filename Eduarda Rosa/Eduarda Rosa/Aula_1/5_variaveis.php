<?php

/* 

Definição 

Espaço na memoria ao qual eu me referencio atraves de um endereço.
Locais usados para armazenat informações durante a execução do programa.

Regras

1 - Sempre antecedidas de $ 

2 - Sempre começa com letra  ou  simbolo "_"

3 - Sentive case $nome <> $NOME <> $Nome

4 - Validos $User, $login, $_cidade, $_uf

5 - não validos - $2mes - $#dia


*/

//Iniciar a variavel 

        $nome = "Impacta";

        echo $nome;

        echo "<hr>";


        echo '$nome';

        echo "<br>";

        //interpolação
        echo "$nome";

        echo "<br>";

        echo "A variavel \$nome tem o conteudo $nome";

        echo "<br>";

        //concatenação 
        //Perfomance é melhor concatenização do que interpolação.
        echo 'A variavel $nome tem o conteudo  '. $nome;





?>