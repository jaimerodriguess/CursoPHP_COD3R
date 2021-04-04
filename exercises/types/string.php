<div class="title">Tipo String</div>

<?php

$str = 'Eu sou uma string.';
echo "Eu sou uma string.";
echo '<br>';
var_dump("Eu sou uma string.");
echo '<br>';
//Concatenação
echo "'Um ","Dois "."três";
echo '<br>';
print("Também é uma opção.");
echo '<br>';
//Algumas funções
echo '<br>'.strtoupper("texto");
echo '<br>'.strtolower("texto");
echo '<br>'.ucfirst("texto grande");
echo '<br>'.ucwords("texto grande");
echo '<br>'.strlen("texto grande");
echo '<br>'.substr("texto grande",5,3);
echo '<br>'.str_replace("grande","pequeno","texto grande");
echo '<br>'.strpos("AbcaBcabc","abc");
echo '<br>';
