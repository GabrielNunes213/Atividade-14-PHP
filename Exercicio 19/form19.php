<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 19</title>
</head>
<body>
    <h2>Leia um valor inteiro N. Este valor será a quantidade de valores
inteiros X que serão lidos em seguida.<br>
Mostre quantos destes valores X estão dentro do intervalo [10,20] e quantos
estão fora do intervalo, mostrando essas informações conforme exemplo (use a
palavra "in" para dentro do intervalo, e "out" para fora do intervalo).<br><br>ERRO</h2>

    <form action="form19.php" method="post">
   <p>N: <input type="number" name="n"><br><br></p>
        <input type="submit">
    </form>    
    <br><br>

    <?php
     $N = $_POST['n'];
     $in = 0;
     $out = 0;

    for($i = 0; $i < $N; $i++){
        if($N >= 10 and $N <= 20){
            $in = $in + $i;
        }
        else
        {
            $out = $out + $i;
        }
    }
   
    echo $in."<br>";
    echo $out;
?>

</body>
</html>