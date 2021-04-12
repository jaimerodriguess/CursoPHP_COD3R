<div class="title">Operadores Lógicos</div>

<?php
echo '<p> V ou F </p>';
var_dump(true);
echo '<br>';
var_dump(false);
echo '<p> Tabela Verdade = AND &&</p>';
var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
echo '<p> Tabela Verdade = OR ||</p>';
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || false);
echo '<br>';
var_dump(false || true);
echo '<br>';