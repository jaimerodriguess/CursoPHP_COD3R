<link rel="stylesheet" href="assets/css/exercises.css">
<div class="title">Integração CSS</div>

<h1 center blue>
<?php
echo "Olá";
echo '<small green>';
echo " Mundo";
echo '</small>';
?>
</h1>

<?= "<div double>Outra forma de me expressar</div>" ?>

<br>
<div><button blue><?=Botão?></button></div>
<style>
button{
    padding: 10px <?= 50 ?>px;
    background-color: green;
    font-weight: 300;
    border-radius:5px;
    font-size:2rem;
}
button:hover{
    background-color: #555;
}

[center]{
    display: flex;
    justify-content: center;
}
[blue]{
    color: blue;
}
[double]{
    font-size: 2rem;
    font-weight:300;
    color:red;
}
</style>