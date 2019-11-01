<?php

     if(!isset($_SESSION)){
        session_start();
    }

    extract($_POST);

    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['senha'] = $_POST['senha'];

    if($usuario=="admin" && $senha=="123"){
        header("Location: arquivo3.php");
    }else{
        echo "Dados invalidos";
    }

 
    echo "<pre>";
    echo "POST:";
    print_r($_POST);
    echo "<pre>";

    echo "<pre>";
    echo "SESSION:";
    print_r($_SESSION);
    echo "<pre>";

    echo "<a href='arquivo3.php'>Ver Novamente </a>";
    echo "<hr>";
    echo "<a href='arquivo4.php'>Sair</a>";
?>
