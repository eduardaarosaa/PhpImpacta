<?php


if(!isset($_SESSION)){

    session_start();
}


$_SESSION['nome'] = $_POST['nome'];
$_SESSION['escola'] = $_POST['escola'];
$_SESSION['idade'] = $_POST['idade'];

echo "<pre>";
echo "POST:";
print_r($_POST);

echo "</pre>";


echo "<pre>";
echo "SESSION:";
print_r($_SESSION);
echo "</pre>";


echo "<a href='3_ver_session.php'>Ver session</a>";