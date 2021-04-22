<div class="title">Desafio Tabela</div>
<?php

$matriz = [
    ['01','02','03','04','05'],
    ['06','07','08','09','10'],
    ['11','12','13','14','15'],
    ['16','17','18','19','20']
];
?>
<table>
<?php
foreach($matriz as $index =>$itens){
    echo $index %2 == 0 ? "<tr lister>":"<tr>";    
    foreach($itens as $item){
        echo "<td>";
            echo $item."<br>";
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>
<style>
table{
    border: 1px solid #333;
    border-collapse: collapse;
    margin: 20px 0px;
}
table tr td {
    border: 1px solid #444;
}
[lister]{
    background-color: #666;
}
</style>
