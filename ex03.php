<?php
/*Construir um algoritmo que leia 2 números e efetue a adição.
Caso o valor somado seja maior que 20, este deverá ser mostrado somando-se
a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.*/

$number1 = readline('Digite o primeiro número: ');
$number2 = readline('Digite o segundo número: ');

$result = $number1 + $number2;

if($result > 20)
    echo $result + 8;
else
    echo $result - 5;

?>