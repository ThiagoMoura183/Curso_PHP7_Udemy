<div class="titulo">Desafio String</div>

<?php

// Qual o método que a posição do texto 'abc' na string '!AbcaBcabc' retorn 1?

echo substr_count('!AbcaBcabc','abc');
echo '<br>' . stripos('!AbcaBcabc','abc');