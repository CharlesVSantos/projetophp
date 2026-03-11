<?php 
   function exibir(){
   STATIC $ano = 2026;  //definição de variável static
   $ano++;
   return $ano;
}
   echo "<br/> Ano:" .$ano;
   echo "<br/> Ano:" .exibir();
   echo "<br/> Ano:" .exibir();
   
 ?>