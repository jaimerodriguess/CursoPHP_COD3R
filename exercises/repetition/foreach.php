<div class="title">Foreach</div>

<?php
$week = [1000 =>"Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
foreach($week as $index => $day){
    echo "$index => $day <br>";
}
$matrix = [
    ["a","e","i","o","u"],
    ["b","c","d"]
];
foreach($matrix as $line){
    foreach($line as $letter){
        echo $letter;
    }
    echo "<br>";
}