<?php

   $A = $_POST['a']; 
   $B = $_POST['b'];
   
   if($A % $B == 0){
    echo "São Multiplos";
   }
   else
   {
       echo "Não são multiplos";
   }

?>