<div class="titulo">Integração CSS</div>

<h1 center>    
    <?php
        echo 'Olá';
        echo '<small>';
        echo ' Mundo!';
        echo '</small>';
    ?>
</h1>

<?= "<div center azul>Outra forma de expressar!</div>"?>

<br>

<div center>
    <button dobro>
        <?= "Teste"?>
    </button>
</div>

<style>
    button {
        padding: 5px <?= 2*10 ?>px; /* Podemos pegar mesmo um CSS e aplicar o PHP */
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] { /* Esse tipo de seletor faz com que qualquer tag que contenha tal propriedade seja formatado, sem necessidade de definir como id ou class */
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>