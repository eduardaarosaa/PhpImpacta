<?php

if(isset($_SESSION)){
    
  session_start();
         
}
      

         echo "Olá, " . $_SESSION['login'];


         echo "<a href='mostra1.php'>Ver novamente</a>";
