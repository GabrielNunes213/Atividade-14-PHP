<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>
<body>
    <h2>Um Posto de combustíveis deseja determinar qual de seus
produtos tem a preferência de seus clientes. Escreva um algoritmo para ler o tipo
de combustível abastecido<br>
1.Álcool<br>
2.Gasolina<br>
3.Diesel<br>
4.Fim).<br>
Caso o usuário informe um código inválido (fora da faixa de 1 a 4) deve ser
solicitado um novo código (até que seja válido). O programa será encerrado
quando o código informado for o número 4. Deve ser escrito a mensagem:<br>
"MUITO OBRIGADO" e a quantidade de clientes que abasteceram cada tipo de
combustível.<br><br>Erro: Não esta somando.</h2>

    <form action="form17.php" method="post">
   <p>Numero: <input type="number" name="n"><br><br></p>
        <input type="submit">
    </form>    
    <br><br>

    <?php
     $numero = $_POST['n'];
     $alcool = 0;
     $gasolina = 0;
     $diesel = 0;

    
        do { if($numero == 1){
            $alcool = $alcool + 1;
            echo "Você abasteceu com Álcool";
            break;
        }
        else
        if($numero == 2){
            $gasolina = $gasolina + 1;
            echo "Você abasteceu com Gasolina";
            break;
        }
        else
        if($numero == 3){
            $diesel = $diesel + 1;
            echo "Você abasteceu com Diesel";
            break;
        }
        else
        if($numero == 4){
            echo "Muito Obrigado<br>Alcool: $alcool <br> Gasolina: $gasolina <br> Diesel: $diesel";
            break;
        }
        else
        {
            echo "Digite um numero válido";
            break;
        }
    } while ($numero != 0);
?>

</body>
</html>

