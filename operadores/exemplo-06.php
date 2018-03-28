<?php 

//?? para ver se esta null e pular a proxima verificação - Php 7

$a = null;
$b = null;
$c = 10;

echo $a ?? $b ?? $c;

echo "<br>";

$a2 = null;
$b2 = 5;
$c2 = 10;

echo $a2 ?? $b2 ?? $c2;


 ?>