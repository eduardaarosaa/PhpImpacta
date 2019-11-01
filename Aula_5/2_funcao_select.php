<?php


    function montaSelect ($contador,$linhas){
        echo "<select>";
        echo " <option value=''>Selecione </option>";
        for($contador;$contador<=$linhas; $contador++){
            echo "<option value='$contador'>" . $contador . "</option>";
        }
        echo "</select>";
    }


        montaSelect(0,15);


?>