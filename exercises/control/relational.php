<div class="title">Operadores Relacionais</div>

<?php
echo 'Igual ==';
var_dump(1 == 1);
echo '<br>Estritamente Igual ===';//Valor e tipo
var_dump(1 === 1);
echo '<br>Maior que >';
var_dump(1 > 1);
echo '<br>Menor que ';
var_dump(1 < 1);
echo '<br>Maior ou igual que >=';
var_dump(1 >= 1);
echo '<br>Menor ou igual que <=';
var_dump(1 <= 1);
echo '<br>Diferente !=';
var_dump(1 != 1);
echo '<br>Diferente <>';
var_dump(1 <> 1);

echo '<p final_line>Operador Spaceship 1 <=> 1</p>';
var_dump(1 <=> 1);
echo '<br><p final_line>Operador Spaceship 2 <=> 1</p>';
var_dump(2 <=> 1);
echo '<br><p final_line>Operador Spaceship 1 <=> 1</p>';
var_dump(1 <=> 2);