<?php

    $cod1 = $_POST['cod1'];
    $qtd1 = $_POST['qtd1'];
    $valor1 = $_POST['valor1'];

    $cod2 = $_POST['cod2'];
    $qtd2 = $_POST['qtd2'];
    $valor2 = $_POST['valor2'];

    $total = ($valor1 * $qtd1) + ($valor2 * $qtd2);
    $total = number_format($total, 2, '.', '');

    echo "Valor a pagar: R$ $total";

?>