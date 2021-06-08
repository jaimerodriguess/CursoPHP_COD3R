<div class="title">Retornando Função</div>

<?php
function sum($a){
    return function($b) use ($a){
        return $a + $b;
    };
}
//echo sum(3)(5);

$doisMais = sum(159);
echo "<br>";
echo $doisMais(1547);