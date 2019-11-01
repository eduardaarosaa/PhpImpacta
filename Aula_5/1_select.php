<!doctype html>

    <html>
        <head>
            <title>Select</title>
        </head>

    <body>

        <select>
             <option value="">Selecione </option>
                <?php 

                for($i = 0; $i<=20;$i++){

                   echo "<option value='$i'>" . $i . '</option>';
                }
                ?>
            

        </select>

    </body>

</html>