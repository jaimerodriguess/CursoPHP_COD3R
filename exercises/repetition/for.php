<div class="title">For</div>
<?php
/*for($cont = 1; $cont <= 5; $cont++){
    echo "<br>".$cont;
}

$week = [ 1 => "Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];

for($i = 1; $i <= count($week); $i++){
    echo $week[$i]."<br>";
}*/

$letter = [
    ["a","b","c","d","e","f","g","h"],
    ["a","e","i","o","u"]
];

for($i = 0; $i < count($letter); $i++){
    for($j = 0; $j < count($letter[$i]); $j++){
        echo $letter[$i][$j];
    }
    echo "<hr>";
}
