<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="main">
        <div class="content">
            <nav class="modules">
                <div class="module red">
                    <h3>Integração</h3>
                    <ul>
                        <li>
                            <a href="exercises.php?dir=exercises&file=exercise_01">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises&file=exercise_02">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises&file=exercise_03">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises&file=challenge">
                                Desafio
                            </a>
                        </li>
                    <ul>
			    </div>
                <div class="module green">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercises.php?dir=exercises&file=integer">
                                Inteiros
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises&file=float">
                                Float
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises&file=arithmetic">
                                Aritmética
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises&file=string">
                                String
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises&file=boolean">
                                Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises&file=convert">
                                Conversões
                            </a>
                        </li>
                    </ul>
			    </div>                               
            </nav>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS PHP <?= date('Y');?>
    </footer>
</body>
</html>
