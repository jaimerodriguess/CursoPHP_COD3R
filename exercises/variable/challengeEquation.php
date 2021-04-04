<div class="title">Desafio Equação</div>

<?php

//echo (((([6 * (3 + 2)]**2 ) / (3 * 2 )) - ((1 - 5) * (2 - 7) / 2)**2)**3)/10**3;
$numeradorA = ((6 * (3 + 2))**2)  / (3 * 2 );
$numeradorB = (((1 - 5) * (2 - 7)) / 2)**2;
$numeradorC = $numeradorA - $numeradorB;
$denominador = 10**3;

echo $numeradorC**3/$denominador;
