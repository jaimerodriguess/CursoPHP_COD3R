<div class="title">Argumento Padrão</div>

<?php
function greeting($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    echo "Bemvindo $nome $sobrenome! <br>";
}
greeting('Jaime', 'Rodriguess');

function order($food, $drink = 'Água'){
    echo "Comida: $food <br>";
    echo "Bebida: $drink <br>";
}
order("Arroz");