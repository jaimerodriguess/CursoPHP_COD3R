<div class="title">Switch</div>
<form action="#" method="post">
    <select name="category">
        <option value="Luxo">Luxo</option>
        <option value="SUV">SUV</option>
        <option value="Sedan">Sedan</option>
        <option value="">Outros</option>
    </select>
    <button type="submit">Verificar</button>
</form>

<?php
$category = $_POST['category'];
$price = 0.0;
$car = '';
/*
if($category === 'Luxo'){
    $car = 'Mercedes';
    $price = 250000;
}else if ($category === 'SUV'){
    $car = 'Renegade';
    $price = 80000;
}else if($category === 'Sedan'){
    $car = 'Etios';
    $price = 55000;
}else{
    $car = 'Mobi';
    $price = 33000;
}
$priceFormatted = number_format($price, 2, ',', '.');
echo "<p>Carro: $car<br>Preço: R$ $priceFormatted</p>";
*/
switch($category){
    case 'Luxo':
        $car = 'Mercedes';
        $price = 250000;
    break;
    case 'SUV':
        $car = 'Renegade';
        $price = 80000;
    break;
    case 'Sedan':
        $car = 'Etios';
        $price = 55000;
    break;
    default:
        $car = 'Mobi';
        $price = 33000;
    break;    
}
$priceFormatted = number_format($price, 2, ',', '.');
echo "<p>Carro: $car<br>Preço: R$ $priceFormatted</p>";