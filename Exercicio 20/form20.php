<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 20</title>
</head>
<body>
    <h2>Leia 1 valor inteiro N, que representa o número de casos de teste
que vem a seguir. Cada caso de teste consiste de 3 valores reais, cada um deles
com uma casa decimal. Apresente a média ponderada para cada um destes
conjuntos de 3 valores, sendo que o primeiro valor tem peso 2, o segundo valor
tem peso 3 e o terceiro valor tem peso 5.</h2>

    <form action="form20.php" method="post">
   <p>N1: <input type="text" name="n1"><br><br></p>
   <p>N2: <input type="text" name="n2"><br><br></p>
   <p>N3: <input type="text" name="n3"><br><br></p>
        <input type="submit">
    </form>    
    <br><br>

    <?php
     $N1 = $_POST['n1'];
     $N2 = $_POST['n2'];
     $N3 = $_POST['n3'];
     $total = ($N1 * 2.0)+($N2 * 3.0)+($N3 * 5.0);
     $media = $total / 10.0;
     $media = number_format($media, 1, '.', '');

     echo "$media";



?>

</body>
</html>