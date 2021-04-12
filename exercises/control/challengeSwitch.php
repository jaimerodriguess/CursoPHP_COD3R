<div class="title">Desafio Switch</div>
<h2>Conversor de Medidas</h2>

<form action="#" method="post">
    <input type="text" name="param" id="param">
    <select name="convert" id="convert">
        <option value="KM->Milhas">KM -> Milhas</option>
        <option value="Milhas->KM">Milhas -> KM</option>
        <option value="Metros->KM">Metros -> KM</option>
        <option value="KM->Metros">KM -> Metros</option>
    </select>
    <button>Converter</button>
</form>
<?php
$param = $_POST['param'];
$converted = '';
$convert = $_POST['convert'];

switch($convert){
    case 'KM->Milhas':
        $converted = $param / 1.60934;
        break;
    case 'Milhas->KM':
        $converted = $param * 1.60934;
        break;
    case 'Metros->KM':
        $converted = $param / 1000;
        break;
    case 'KM->Metros':
        $converted = $param * 1000;
        break;
}
$convertedFormatted = number_format($converted, 3, ',', '.');
echo "$param $convert $convertedFormatted";

