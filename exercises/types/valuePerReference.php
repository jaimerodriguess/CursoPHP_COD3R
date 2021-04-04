<div class="title">Valor ou Referência</div>

<?php
$variable = 'valor inicial';
echo $variable.'<br>';
$newVariable = &$variable;
$newVariable = 'Novo Valor';
echo $newVariable . '<br>';
echo $variable . '<br>';

/**
 * Atribuição por valor
 * $a = $b
 * Atribuição por referência
 * $a = &$b
 */