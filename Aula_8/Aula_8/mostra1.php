<?php
    
        session_start();

         $_SESSION = $_POST['login'];
       

         echo "Olá, " . $_SESSION['login'];


         echo "<a href='sair.php'>SAIR</a>";