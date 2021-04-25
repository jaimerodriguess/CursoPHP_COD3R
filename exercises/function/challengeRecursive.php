<div class="title">Desafio de Recursividade</div>

<?php
$arr = [1, 2, [3, 4, 5],6, [7,[8, 9]], 10];
function printArray($arr, $level = '>'){
    foreach($arr as $ar){
        if(is_array($ar)){
            printArray($ar, $level.$level[0]);
        } else {
            echo "$level $ar <br>";
        }
    }
}
printArray($arr);
    