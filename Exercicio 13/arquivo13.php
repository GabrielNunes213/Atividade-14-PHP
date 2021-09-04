<?php

    $X = $_POST['x'];
    $Y = $_POST['y'];

    if($X == 0.0 and $Y == 0.0){
        echo "Origem";
    }
    else
    if($X == 0.0){
        echo "Eixo Y";
    }
    else
    if($Y == 0.0){
        echo "Eixo X";
    }
    else
    if($X > 0.0 and $Y > 0.0){
        echo "Q1";
    }
    else
    if($X < 0.0 and $Y > 0.0){
        echo "Q2";
    }
    else
    if($X < 0.0 and $Y < 0.0){
        echo "Q3";
    }
    else
    {
        echo "Q4";
    }

?>