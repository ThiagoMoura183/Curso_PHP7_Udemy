<div class="titulo">Tipo Booleano</div>

<?php

echo TRUE, '<br>';
echo FALSE; // False não é convertido no browser

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');

echo '<br>' . is_bool(false); // Detecta se o valor é booleano ou não
echo '<br>' . is_bool('true');

// Fazer as regras de conversões

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); // 0 é o único número entendido como FALSO (dos inteiros)
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.00000000000000000001);

echo '<br>' . var_dump((bool) ""); // False
echo '<br>' . var_dump((bool) "0"); // False
echo '<br>' . var_dump((bool) " "); // A partir daqui, tudo é true
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");


echo '<br>' . var_dump(!!"false");






