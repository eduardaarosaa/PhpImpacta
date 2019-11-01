<html>
    <head><title>Tabuada</title></head>

    <body>
        <table border='1'>
            

            <?php
                function tabuada ($num1){

                    for($i=0; $i<=10;$i++){
                        
                              echo "<tr><td>". $num1.'x' . $i . "=</td>";
                              echo "<td>". $num1 * $i. "</td></tr>";
                                            
                }

                }

                tabuada(3);

        
               
                ?>

               
            </tr>


           
        </table>

    </body>

    </html>