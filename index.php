<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Curso PHP</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Basico&file=ola">Olá PHP</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Basico&file=html">Integração HTML</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Basico&file=css">Integração CSS</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Basico&file=comentarios">Comentários PHP</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                 <div class="modulo vermelho">
                    <h3>Módulo 02 - Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Tipos&file=int">Tipo Inteiro</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Tipos&file=float">Tipo Float</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Tipos&file=aritmeticas">Op. Aritméticas</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Tipos&file=desafio_precedencia">Desafio Precedência</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Tipos&file=string">Tipo String</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Tipos&file=desafio_string">Desafio String</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Tipos&file=booleano">Tipo Booleano</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=Tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 03 - Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=Variaveis&file=basico">Variáveis</a></li>
                    </ul>
                </div>
               <!-- <div class="modulo violeta">
                    <h3>Módulo 04</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Módulo 05</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo amarelo">
                    <h3>Módulo 06</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo marrom">
                    <h3>Módulo 07</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo azul-claro">
                    <h3>Módulo 08</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 09</h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div> -->

            </nav>
        </div>

    </main>

    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>