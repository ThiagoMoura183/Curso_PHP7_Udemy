<div class="titulo">Comentários PHP</div>

<?php   
    echo 'Estou no PHP';
    # echo 'Comentário';
    // echo 'Comentário';
// No momento de fechar a tag, mesmo se colocando o simbolo de comentário, o fechamento do bloco é "mais forte" que esse tipo de comentário?> 

<p>Depois do primeiro bloco!</p>

<!-- Os comentários HTML vão para o browser (inspecionar) -->
<!-- Os comentários PHP NÃO vão para o browser (inspecionar) -->

<?php	
/*
Linha 1 do comentário
Linha 2 do comentário
Linha 3 do comentário
?> */                     /*Esse comentário é mais forte que o fechamento da TAG */
?>

<p>Depois do segundo bloco!</p>