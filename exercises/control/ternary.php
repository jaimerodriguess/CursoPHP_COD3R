<div class="title">Operador Ternário</div>
<form action="#" method="post">
    <input type="text" name="age" id="age">
    <button type="submit">Verificar</button>
</form>
<?php
//$age = 65;
$status;

/*if( $_POST['age'] >= 18 ){
    $status = "Maior de idade!";
} else {
    $status = "Menor de idade";
}*/
$status = $_POST['age'] >= 18 ? ($_POST['age'] > 65 ? 'Aposentado' : 'Maior de idade') : 'Menor de idade';

echo $status;