<?php

    $senha = $_POST['senha'];

    switch ($senha):
        case 2002:
            echo "Acesso Permitido";
            break;
        default:
            echo "Senha Invalida";
        endswitch;

?>