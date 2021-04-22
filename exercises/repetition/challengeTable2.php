<div class="title">Desafio Tabela 2</div>
<form action="#" method="post">
    <label for="row">Linhas
        <input type="number" name="row" id="row">
    </label>
    <label for="date">Colunas
        <input type="number" name="date" id="date">
    </label>
    <button type="submit">Criar</button>
</form>
<table>
<?php
$row = $_POST['row'];
$collumn = $_POST['date'];
for($i = 0; $i <= $row; $i++){
    echo "<tr>";
    for($j = 0; $j <= $collumn; $j++){
        echo "<td> $j </td>";        
    }
    echo "</tr>";
}
?>
</table>
<style>
    input {
        padding: 20px;
    }
    button {
        padding: 15px 25px;
        font-size: 0.8rem;
        font-weight: 300;
    }
    table tr td{
        border: 1px solid #222;
    }
    form {
        display: flex;
    }
</style>