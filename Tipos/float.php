<div class="titulo">Tipo Float</div>

<?php
echo 1.1, '<br>'; //(Valor Literal) Float

var_dump(1.0); // Mesmo que o valor inferido seja um inteiro, o php interpreta como float pela pontuação
echo '<br>';

echo PHP_FLOAT_MAX, '<br>';
echo PHP_FLOAT_MIN, '<br>';

echo 1.2e3, '<br>'; // Usar notação E (1.2x10³) = 1200
echo 13E-3, '<br>'; // 13x10-³ = 0.013