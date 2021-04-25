<div class="title">Palindromo</div>
<form action="#" method="post">
    <input type="text" name="word" id="word">
    <button type="submit">Verificar</button>
</form>
<?php
$word = $_POST['word'];
function reverseWord($word){
    for($i = strlen($word); $i >= 0; $i--){
        $wordNew .= substr($word,$i,1);
    }
    return $wordNew;
}
function verifyPalindrome($word){
    $wordReverse = reverseWord($word);
    if($word === $wordReverse){
        echo "Sim!";
    } else {
        echo "Não";
    }
}
//verifyPalindrome($word);

function palindromeSimple($word){
    echo $word === strrev($word)?"Sim":"Não";
}

palindromeSimple($word);