<?php

//Efetue um algoritmo PHP que receba um valor digitado pelo usuário e imprima o texto “o valor é maior que 10” caso isso seja verdade, senão imprima “o valor é menor que 10”.
$number = readline('Digite um valor: ');

if($number > 10)
    echo'o valor é maior que 10';
else
    echo'o valor é menor que 10';
?>
