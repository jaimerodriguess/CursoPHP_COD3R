<div class="title">Argumentos Variáveis</div>

<?php
function sum(...$number){
    foreach($number as $num){
        $num += $num;
    }
    echo $num;
}
$numeros = 6;
sum(...$numeros);

function members($member, ...$dependent){
    echo "Membro: $member <br>";
    if($dependent){
        foreach($dependent as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}

members("Jaime", "Maria", "Lucas", "Noah");