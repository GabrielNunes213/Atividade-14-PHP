<?php

    $A = $_POST['a'];
    $B = $_POST['b'];
    $C = $_POST['c'];

    $pi = 3.14159;
    $triangulo = ($A * $C) / 2;
    $circulo = $C * $C * $pi;
    $trapezio = ($A + $B) * ($C) / 2;
    $quadrado = $B * $B;
    $retangulo = $A * $B;

    $triangulo = number_format($triangulo, 3, '.', '');
    $circulo = number_format($circulo, 3, '.', '');
    $trapezio = number_format($trapezio, 3, '.', '');
    $quadrado = number_format($quadrado, 3, '.', '');
    $retangulo = number_format($retangulo, 3, '.', '');

    echo "Triangulo: $triangulo<br> Circulo: $circulo<br> Trapezio: $trapezio<br> Quadrado: $quadrado<br> Retangulo: $retangulo<br>";
?>