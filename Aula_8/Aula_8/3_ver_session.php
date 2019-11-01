<?php



if(!isset($_SESSION)){
    
        session_start();
    }



    echo "<pre>";
    echo "POST:";
    print_r($_POST);
    
    echo "</pre>";
    
    
    echo "<pre>";
    echo "SESSION:";
    print_r($_SESSION);
    echo "</pre>";



    echo "<a href='4_destroy.php'>Sairn</a>";