<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16</title>
</head>
<body>
    <h2>Escreva um programa para ler as coordenadas (X,Y) de uma
quantidade indeterminada de pontos no sistema cartesiano. Para cada ponto
escrever o quadrante a que ele pertence. O algoritmo será encerrado quando
pelo menos uma de duas coordenadas for NULA<br></h2>

    <form action="form16.php" method="post">
   <p>X: <input type="text" name="x"><br><br></p>
   <p>Y: <input type="text" name="y"><br><br></p>
        <input type="submit">
    </form>    
    <br><br>

    <?php
     $X = $_POST['x'];
     $Y = $_POST['y'];
    
     if($X > 0 and $Y > 0){
         echo "Primeiro quadrante";
     }
     else 
     if($X < 0 and $Y > 0){
        echo "Segundo quadrante";
     }
     else
     if($X < 0 and $Y < 0){
         echo "Terceiro quadrante";
     }
     else
     {
         echo "Quarto quadrante";
     }
?>

</body>
</html>

