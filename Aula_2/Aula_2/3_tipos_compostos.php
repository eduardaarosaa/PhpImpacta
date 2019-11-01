<?php 


//sintaxe herodoc php
//HERODC - multiplas linhas de HTML para o PHP.
//A primeira e a ultima linha não podem ter espaços 

$cliente = 'Eduarda Rosa';


$corpo = <<<HTML
            <!doctype html>
            <head>
            <title>Teste Corpo do e-mail </title>
            </head>
            <body>
                <div>
                    <p>
                    Ola $cliente, obrigado por se cadastrar no sistema.
                    </p>
                    <a href="#">Clique aqui </a>

                    <p>Att, <br> Turma de PHP I </p>
                </div>
            </body>
            </html>

           

HTML;

echo $corpo;

?>