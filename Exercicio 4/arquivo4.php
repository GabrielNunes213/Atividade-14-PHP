<?php
    $numeroF = $_POST['numerofuncionario'];
    $Horastrabalhadas = $_POST['horastrabalhadas'];
    $recebephora = $_POST['recebeporhora'];
    $calculo = $Horastrabalhadas * $recebephora;
    $calculo = number_format($calculo, 2, '.', '');

    echo "Numero = $numeroF <br> Salario = U$ $calculo";
?>