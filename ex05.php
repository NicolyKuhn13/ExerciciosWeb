<?php
//Ler nome, endereço e telefone e imprimi-los.

function setGetData(){

	$nome = readline('Digite um nome: ');
	$endereco = readline('Digite um endereco: ');
	$telefone = readline('Digite um telefone: ');

  echo $nome. '</br>'. $endereco. '</br>'. $telefone;
}

setGetData();

?>