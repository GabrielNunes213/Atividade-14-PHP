<?php

    $p = 3.14159;
    $raio = $_POST['raio'];
    $area = $p * $raio * $raio;
    $area = number_format($area, 4, '.', '');

    echo "A = $area";

?>