<div class="titulo">Atribuições</div>

<?php

$title = 'Atribuições'; // A tipagem do PHP é uma tipagem fraca, ele identifica a variavel conforme atribuição

$numero = 10;
echo '<br>' . $numero;

$numero = $numero -3;
echo '<br>' . $numero;

$numero = $numero + '1.5'; // A variavel era int e agora passa a ser float
echo '<br>' . $numero;

// DECREMENTO
//Pré-Fixado
--$numero;
//Pós-Fixado
$numero--; // Decrementa 1 unidade (Não dá para fazer com valor literal (ex: 10--), apenas variáveis)


// INCREMENTO
//Pré-Fixado
++$numero;
//Pós-Fixado
$numero++; // Incrementa 1 unidade (Não dá para fazer com valor literal (ex: 10++), apenas variáveis)

echo '<br>' . $numero; // Aqui vale 8.5
$numero += 5;
echo '<br>' . $numero; // Aqui vale 13.5
$numero -= 5;
echo '<br>' . $numero;
$numero *= 10;
echo '<br>' . $numero;
$numero /= 5;
echo '<br>' . $numero;
$numero **= 4;
echo '<br>' . $numero;
$numero .= 99999; // Isso é concatenação apenas
echo '<br>' . $numero;

echo '<br>';
echo '<br>';


$texto = 'Esse é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;
$texto .= ' de verdade!';
echo '<br>' . $texto;

echo '<br>';
echo '<br>';

//$variavelInexistente = 'valor inexistente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default'; // Se a variavel não existir (Null), ele escreve valor default

echo '<br>' . $valor;



