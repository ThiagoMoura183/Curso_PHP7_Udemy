<div class="titulo">Variáveis</div>

<?php
$numeroA = 13; //Toda variável começa com o simbolo $
echo $numeroA, '<br>';

var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo 'O valor da soma é ' . $soma;  //Nome da variável é case sensitive
echo '<br>';
echo isset($soma); // Verifica se a variável está ou não setada! (Mesmo se for valor zero)

unset($soma); //Des-seta a variável
echo '<br>';

echo !isset($soma); // Verifica se a variável está ou não setada! (Mesmo se for valor zero)         Atenção: Quando for verdade, ele não exibe nada!
var_dump($soma); // Verá que está vazia


// Nomes de variáveis
$var = 'valido';
$var2 = 'valido';
$VAR3 = 'valido';
$_var_4 = 'valido';
$vâr5 = 'valido';
//$6var = 'invalido'; // Não começa com número
//$%var7 = 'invalido'; // Caracter especial no início
//$var8% = 'invalido'; // Caracter especial no fim

echo '<br>';

