<div class="title">Funções Anonimas</div>

<?php
$sum = function($a, $b){
    return $a + $b;
};
$div = function($a, $b){
    return $a / $b;
};
echo $sum(3,7)."<br>";

function execute($a, $b, $op, $func){
    $result = $func($a, $b);
    echo "$a $op $b = $result"; 
}
execute(3,5,'+', $div);

?>