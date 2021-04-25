<div class="title">Funções</div>
<?php
function printMessages(){
    echo "Olá";
    echo "Mundo!";
}
printMessages();
$variable = 1;

function changeValue(){
    $variable = 2;
    echo "<br> Durante a execução: $variable <br>";
}
changeValue();
echo $variable;

function changeValueOk(){
    global $variable;
    $variable = 3;
    echo "<br> Durante a execução: $variable <br>";
}
changeValueOk();
echo "<br> Depois da execução: $variable <br>";