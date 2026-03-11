<?php 
    $nome= "Armandino"; //variavel local no script
    //implementação de uma função

    function exibir(){
        $nome = "Josefina"; //variavel local na função

        echo "Valor da variável dentro da função<br/>". $nome;

    }
    exibir(); //chamada da função

    echo "<br/> Valor da variavel dentro da função<br/>". $nome;
 ?>