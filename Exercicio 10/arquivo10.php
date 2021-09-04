<?php

    $A = $_POST['a'];
    $B = $_POST['b'];

    $contagem = 0;

    echo "Não funcionou direito<br><br>";

    if ($A < $B){
        $contagem = $B - $A;
    }
    else
    if($B > $A){
        $contagem = $A - $B;
    }

    echo "O jogo durou $contagem Hora(s)";

?>