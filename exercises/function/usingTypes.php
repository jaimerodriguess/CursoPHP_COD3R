<div class="title">Usando Tipos</div>

<?php
function sum($a, $b){
    return $a + $b;
}
echo sum(2,5)."<br>";
echo sum(1.7, 1.5)."<br>";
echo sum(3, "4dois")."<br>";
echo "<hr>";
function sum2(int $a, int $b){
    return $a + $b;
}
echo sum2(2,5)."<br>";
echo sum2(1.7, 1.5)."<br>";
echo sum2(3, "4dois")."<br>";
echo "<hr>";
function sum3($a, $b): int{
    return $a + $b;
}
echo sum3(2,5)."<br>";
echo sum3(1.7, 1.5)."<br>";
echo sum3(3, "4dois")."<br>";
