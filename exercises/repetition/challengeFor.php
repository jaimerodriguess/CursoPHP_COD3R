<div class="title">Desafio For</div>

<?php
$hash = '#';
for($i = 0; $i < 5; $i++){
    echo $hash."<br>";
    $hash .= '#';
}
echo "<hr>";

$hash2 = '';
for($hash2 = '#'; $hash2 !== '######'; $hash2 .= '#'){
    echo "$hash2 <br>";
}