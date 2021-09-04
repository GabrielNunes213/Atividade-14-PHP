<?php

    $numero = $_POST['numero'];

    if ($numero > 0) {
        echo "POSITIVO";
    }
    else 
    if($numero == 0)
    {
        echo "NEUTRO";
    }
    else
    {
        echo "NEGATIVO";
    }

?>