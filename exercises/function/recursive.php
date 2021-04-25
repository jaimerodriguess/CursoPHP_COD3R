<div class="title">Recursividade</div>

<form action="#" method="post">
    <input type="number" name="number" id="number">
    <button type="submit">Calcular</button>
</form>

<?php
$n = $_POST['number'];

function countAsOne($n){
    $soma = 0;
    for($i = 1; $i <= $n; $i++){
        $soma += $i;
    }
    return $soma;
}
echo countAsOne($n)."<br>";
function countAsOneRecursive($n){
    if($n === 1){
        return 1;
    }
    return $n + countAsOneRecursive($n - 1);
}
echo countAsOneRecursive($n)."<br>";