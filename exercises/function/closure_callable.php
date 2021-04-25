<div class="title">Closure e Callable</div>

<?php
$soma = function($a, $b){
    return $a + $b;
};
function soma2($a, $b){
    return $a + $b;
}

function execute($a, $b, $op, $func){
    $result = $func($a + $b);
    echo "$a $op $b = $result";
}
echo soma(6, 40);
execute(3, 6, "+", $soma);
/*echo $soma(3,6)."<br>";
var_dump(soma);
echo "<br>";
echo soma(8,9);
echo "<br>";

echo is_callable($soma);*/