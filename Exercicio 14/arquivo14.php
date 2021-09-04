<?php

    echo "Não entendi a segunda parte do enunciado, fiquei um pouco confuso<br><br>";

    $salario = $_POST['salario'];
    $imp = 0;

    if($salario > 0.00 and $salario <= 2000.00){
        echo "Isento";
    }
    else
    if($salario > 2000.00 and $salario <= 3000.00){
        $imp = (8 / 100) * $salario;
        echo "$imp";
    }
    else
    if($salario > 3000.00 and $salario <= 4500.00){
        $imp = (18 / 100) * 1000.00;
        echo "$imp";
    }
    else
    if($salario > 4500.00){
        $imp = (28 / 100) * 1000.00;
        echo "$imp";
    }
?>