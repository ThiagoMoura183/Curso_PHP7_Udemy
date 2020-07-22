<div class="titulo">Tipo String</div>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu Também"); // Aparece  tamanho 10 por conta do UTF-8, o acento
echo '<br>';

// Concatenação
echo "Nós também" . ' somos'; // Não tem problema concatenar strings com aspas simples ou duplas
echo '<br>', "Também aceito", " virgulas"; // Com vírgula, em apenas alguns contextos

echo '<br>';
echo "'Teste'" . '"Teste"' . '\'Teste\' ' . "\"Teste\" " . "\\"; // Formas de usar as aspas na digitação (com concatenação)

print("<br>Também existe a função print");
print "<br>Também existe a função print"; // Sem parenteses funciona também

//Obs: O eco pode também ter ou não parenteses.


//Algumas funções...

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');

echo '<br>' . ucfirst('Só a primeira letra'); // Primeira letra MAIUSCULA
echo '<br>' . ucwords('Todas as palavras'); // Primeira letra de todas as palavras MAIUSCULA

echo '<br>' . strlen('Quantas letras?');
echo '<br>' . strlen('Eu também'); 
echo '<br>' . mb_strlen('Eu também', "utf-8"); // O mb ignora os acentos (por conta do UTF-8)

echo '<br>' . substr('Só uma parte mesmo', 7, 6); //Começa no 7 caractere e vai até o 6 (não incluso)
                                                  // Se não colocar o final (6), ele mostra até o fim

echo '<br>' . str_replace('isso','aquilo', 'Trocar isso'); // Troca o primeiro pelo segundo, na frase que é passada em 3º parâmetro
