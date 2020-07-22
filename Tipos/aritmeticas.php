<div class="titulo">Operações Aritméticas</div>

<?php

echo 1 + 1, '<br>';
echo var_dump(1 + 1), '<br>', var_dump(1 + 1.0); // Int e Float, justamente pelo ponto

echo '<br>';

echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';

echo '<br>';
echo 7/4, '<br>'; // O PHP, mesmo sem nenhum float, ele gera um valor float
echo var_dump(7/4), '<br>';
echo '<br>';

echo intdiv(7,4), '<br>'; // Com essa função, o PHP contempla apenas o valor inteiro
echo round(7/4), '<br>'; // Função de arredondamento
echo '<br>';

echo 7 % 4, '<br>'; // O mod é responsável por pegar o resto da divisão
echo 7 % 4, '<br>';
echo 8 % 2, '<br>';
echo 7 / 0, '<br>'; // Gera o INF pois tende ao infinito
echo '<br>';

//echo intdiv(7,0); // Da erro, e portanto, tudo depois daqui não será renderizado.
echo 4 ** 2, '<br>'; // Isso é exponenciação

// Precedência de Operadores:
// () => ** => / * % => + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2;