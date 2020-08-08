<div class="titulo">Desafio Equação</div>

<?php

$numeradorA = (6*(3+2))**2;
$numeradorB = (1-5)*(2-7);
$denominadorA =  3*2;
$denominadorB = 2; 
$denominadorGeral = 10**3;

$resultA = $numeradorA/$denominadorA;
$resultB = ($numeradorB/2)**2;
$numeradorGeral = ($resultA - $resultB)**3;

$resultFinal = $numeradorGeral/$denominadorGeral;

echo 'O resultado final será: ' . $resultFinal;