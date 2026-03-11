<?php 
$data = "10 de março de 2026"; //string
$salario = 850.00;             //float ou double 
$cargo = "estagiario";         //string
$idade = 18;                   //interager ou int
$resultado = true;             //boolean

if ($resultado){
	echo "verdadeiro<br/>";
	print("data : $data <br/> salário : $salario<br/> Cargo : $cargo<br/> Idade : $idade<br/>"); 
}    
   echo "Arquivo criado em $data <br/>";
   printf("Salário minimo: R$ %.2f <br/>", $salario);
   $texto = sprintf("%s recebe R$ %.2f por mes", $cargo, $salario*2);
   echo $texto;



 ?>