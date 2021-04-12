<div class="title">Desafio PI</div>
<?='PI = '. pi();?>
<form action="#" method="post">
<input type="text" name="piuser">
<input type="submit" name="Verificar">
<br>
<?php
$piUser = isset($piUser)?$piUser:$_POST['piuser'];
if((pi() - $piUser) == (pi() - 3.14)){
    echo 'Igual';
} else {
    echo 'Diferente';
}
?>
</form>