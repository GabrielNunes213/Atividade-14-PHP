<?php

    $num = $_POST['num'];

    if($num >= 0 and $num < 25){
        echo "$num está entre [0 e 25]";
    }
    else
    if($num >= 25 and $num < 50){
        echo "$num está entre [25 e 50]";
    }
    else
    if($num >= 50 and $num < 75){
        echo "$num está entre [50 e 75]";
    }
    else
    if($num >= 75 and $num <= 100){
        echo "$num está entre [75 e 100]";
    }
    else
    {
        echo "Fora de intervalo";    
    }

?>