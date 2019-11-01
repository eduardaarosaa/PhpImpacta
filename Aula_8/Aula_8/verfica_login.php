<?php

     if(isset($_SESSION)){

        session_start();
     }
     
     $login = $_POST['login'];
     $senha = $_POST['senha'];
     $_SESSION = $_POST['login'];
     $_SESSION = $_POST['senha'];

     

    if($login == 'admin' && $senha == '123') {

        echo "usuário cadastrado";

        echo "<br>";

        echo   $login;

        echo "<br>";

        echo $senha;

        echo "<a href='mostra.php'>Mostra</a>";

    }else{

        echo "dados inválidos";
        echo "<a href='login.php'>Voltar</a>";
    }