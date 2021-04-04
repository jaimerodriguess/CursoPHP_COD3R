<div class="title">Variáveis variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a} $valorA <br>";

$epa = 'opa';
$opa = 'vish';
$vish = 'eita';
echo "{$$$epa}<br>";
echo '<-----------------------------Desafio--------------------------->';
$a = 'Nossa';
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'responder';
$responder = 'esse';
$esse = 'desafio';
echo '<br>';
echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}.";
