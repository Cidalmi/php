<?php 


$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;
///////////////////////////////////////////////////

$frutas = array('abacaxi' , 'laranja', 'manga');

echo $frutas[2];

$nascimento = new datetime();

echo "<br/><br/>";
var_dump($nascimento);
echo "<br/><br/>";

///////////////////////////////////////////////////
$arquivo = fopen("exemplo.php", "r");

var_dump($arquivo);


$nulo = null;
$vazio = "";

 ?>
