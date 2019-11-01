<html>
    <head>
        <title>Modulo I </title>

    </head>

    <body>

        <?php

        $nome = "Duda";
      
        $saida = "Olá  echo $nome,\n terceiro aviso'";
       // echo $saida;

        ?>
     
       <script>
            alert('Olá, Impacta \nprimeiro aviso');

        </script>

        <script>
            alert('Olá <?php echo $nome ?>,\n segundo aviso');

        </script>

        <script>
        alert(<?php echo $saida ?>);

        </script>

        
        


        

       

      

    
    </body>


</html>
