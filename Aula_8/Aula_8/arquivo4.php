<?php
    //tela login nome e enviar, mostra nome na tela, sessao ver novamente
    //ultima pag sair unset

    unset($_SESSION);
    echo "Sessao eliminada";

    header("Location: arquivo1.php");

?>