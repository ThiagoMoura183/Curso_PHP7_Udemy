<div class="titulo">Olá PHP!</div>

<h2>Exemplo A</h2>

<?php
    $achoque = "parei errado";
    echo 'Olá ';
    echo 'Mundo!' /* Na última sentença do código PHP, não necessariamente precisa fechar com o ponto e vírgula.*/
?>

<h2>Exemplo B</h2>

<?= "Outra forma de expressar algo, sem necessidade do echo!" ?>

<?php
    phpinfo();
/* Se o bloco PHP for o último bloco, ou então o código todo for unicamente em php, não é necessário fechar a última tag */
