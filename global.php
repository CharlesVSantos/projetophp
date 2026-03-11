<?php 
   $ano = 2026;
   
   //implementação de uma função

   function exibir(){
   STATIC $ano;  //definição de variável global
   $ano++;
   return $ano;

   }
   echo "<br/> Ano:" .$ano;
   echo "<br/> Ano:" .exibir();
   echo "<br/> Ano:" .exibir();
   echo "<br/> Ano:" .$ano;
 ?>