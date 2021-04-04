<div class="title">Variáveis</div>

<?php
$numeroA = 13;

echo $numeroA . '<br>';

$a =  5;
$b = 8;
$somaDoisNumeros = $a + $b;
echo $somaDoisNumeros;
echo '<-------------------------------------------------><br>';
echo '<br>isset'.isset($somaDoisNumeros);
unset($somaDoisNumeros);
echo '<br>isset'.isset($somaDoisNumeros);
echo '<-------------------------------------------------><br>';
echo '<pre>';
echo '<-------------------------------------------------><br>';
var_dump($_SERVER);
echo '<-------------------------------------------------><br>';
var_dump($_COOKIE);
echo '<-------------------------------------------------><br>';
var_dump($_ENV);
echo '<-------------------------------------------------><br>';
var_dump($_REQUEST);
echo '<-------------------------------------------------><br>';
var_dump();
echo '<-------------------------------------------------><br>';
var_dump();
echo '<-------------------------------------------------><br>';
var_dump();
echo '<-------------------------------------------------><br>';
echo '</pre>';

