<div class="title">Operações com Arrays</div>
<?php
$data1 = array(
    "nome" => "Jose",
    "idade" => 28
);
$data2 = array(
    "naturalidade" => "Fortaleza"
);
$dataComplete = $data1 + $data2;
echo "<pre>";
print_r($dataComplete);
echo "</pre>";
echo "<br>" . is_array($dataComplete);
echo "<br>" . count($dataComplete);
echo "<br>";
$index = array_rand($dataComplete);
echo "$index = $dataComplete[$index]";

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
$numerosNaturais = array_merge($pares, $impares);
sort($numerosNaturais);
echo "<pre>";
print_r($numerosNaturais);
echo "</pre>";