<div class="title">Argumentos e Retorno</div>
<?php

function greeting($name){
    return "Seja Bem Vindo! ${name}<br>";
}
echo greeting("jaime");

function sum($a, $b){
    return $a + $b;
}
echo sum(57, 33);
