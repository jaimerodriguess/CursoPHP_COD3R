<div class="title">Arrays Multidimensionais</div>
<?php

$data = [
    "pessoa1" => [
        "nome" => "Jaime",
        "idade" => 41,
        "naturalidade" => "Santos",
        "filiacao" => [
            "pai" => "Jorge Bisbo de Souza",
            "mae" => "Terezinha Rodrigues de Souza"
        ]
    ],
    "pessoa2" => [
        "nome" => "Maria",
        "idade" => 27,
        "naturalidade" => "Campo do Brito",
        "filiacao" => [
            "pai" => "Jose Celino",
            "mae" => "Luzinete Silva"
        ]
    ]
];

echo "<pre>";
print_r($data);
echo "</pre>";
echo $data['pessoa2']['filiacao']['pai'];