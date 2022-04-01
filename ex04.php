<?php
//Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes
$numero = readline('Informe um número: ');

if($numero % 10 == 0){
    echo'Este número é divisível por 10 </br>';
    if($numero % 5 == 0){
        echo'Este número é divisível por 5 </br>';
        if($numero % 2 == 0){
            echo'Este número é divisível por 2 </br>';
        }
    }
}
else
    echo'Este número não é divisível por nenhum dos valores acima';

?>