<?php 

include "function.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>banco</title>
</head>
<body>
    <h1 style=color:green>Conectando com banco Mysqli</h1>
    
    <?php

   $conn = conecta();


   desconecta($conn);

   

    ?>
    
</body>
</html>