<?php

    $cod = $_POST['cod']; 
    $qtd = $_POST['qtd'];
    $total = 0;

    if($cod == 1){
        $total = 4.00 * $qtd;
        $total = number_format($total, 2, '.', '');
        echo "Total: R$ $total";
    }
    else
    if($cod == 2){
        $total = 4.50 * $qtd;
        $total = number_format($total, 2, '.', '');
        echo "Total: R$ $total";
    }
    else
    if($cod == 3){
        $total = 5.00 * $qtd;
        $total = number_format($total, 2, '.', '');
        echo "Total: R$ $total";
    }
    else
    if($cod == 4){
        $total = 2.00 * $qtd;
        $total = number_format($total, 2, '.', '');
        echo "Total: R$ $total";
    }
    else
    if($cod == 5){
        $total = 1.50 * $qtd;
        $total = number_format($total, 2, '.', '');
        echo "Total: R$ $total";
    }

?>