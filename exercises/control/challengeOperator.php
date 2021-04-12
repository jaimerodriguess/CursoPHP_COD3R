<div class="title">Desafio Operadores Lógicos</div>

<form action="#" method="post">
    <div>
        <label for="work1">Trabalho 1: </label>
        <select name="work1" id="work1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="work2">Trabalho 2: </label>
        <select name="work2" id="work2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Verificar</button>
</form>
<?php

/*if($_POST['work1'] and $_POST['work2']){
    echo 'Sorvete e TV 50"';
}elseif($_POST['work1'] or $_POST['work2']){
    echo 'Sorvete e TV 32"';
}else{
    echo 'Ficar em casa!';
}*/

if($_POST['work1'] && $_POST['work2']){
    $tv = '50"';
}else if($_POST['work1'] || $_POST['work2']){
    $tv = '32"';
}

if($tv){
    $resultado = "Vamos comprar um TV de $tv";
}else{
    $resultado = "Sem TV dessa vez :( ";
}

if($_POST['work1'] && $_POST['work2']){
    $icecream = true;
}else if($_POST['work1'] || $_POST['work2']){
    $icecream = false;
}

if(!$icecream){
    $resultado .= '<br>Estamos mais saudáveis!';
}else{
    $resultado .= '<br>Sorvete Liberado!!!';
}

echo $resultado;