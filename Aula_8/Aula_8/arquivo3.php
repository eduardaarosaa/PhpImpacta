<?php
 
 if(!isset($_SESSION)){
    session_start();
}
    
    echo "Ola, ". $_SESSION['usuario'];

    echo "<a href='arquivo4.php'>Sair</a>";

?>
