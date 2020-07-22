<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

// Int para Float

echo '<br>';
var_dump(PHP_INT_MAX +1); // Passou do máximo (limite) do int, logo, se torna float.
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3); //Conversão EXPLÍCITA

// Float para int
echo '<p>Float para Int</p>';
var_dump((int) 6.8); //Ocorrerá perda de dados, pois ele irá ignorar o ponto flutuante.
echo '<br>';
var_dump(intval(2.8,10)); //Converte em base. Por exemplo (2 = binário, 10 = decimal,...)
echo '<br>';
var_dump((int) round(2.8));

// Operações com string

echo '<p>Strings</p>';
var_dump(3 + "2"); // Resultado é 5, pois o PHP sabe que não é concatenação (.)
echo'<br>';
var_dump("3" + 2);
echo'<br>';
var_dump("3" . 2);
echo'<br>', is_string("3" . 2); // Isso é String
echo'<br>', is_string("3" + 2); // Isso não é uma String pois ele soma
echo'<br>';
var_dump(1 + "cinco"); // Ele ignora
echo'<br>';
var_dump(1 + "5 cinco"); // Ele pega a parte inicial, faz a soma e ignora o que não interpretar. No caso, resulta em 6
echo'<br>';
var_dump(1 + "cinco 5"); // Ele deixa de olhar depois da soma, pois ele não entende o 5;
echo'<br>';
var_dump(1 + "2+5"); // Ele olha 1+2, e como depois vem sinal de mais, ele ignora.
echo'<br>';
var_dump(1 + "3.2"); // Resulta em 4.2
echo'<br>';
var_dump(1 + "-3.2e2");
echo'<br>';
var_dump((int) "10.5");
echo'<br>';
var_dump((float) "10.5");
echo'<br>';