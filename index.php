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
                            <a href="exercises.php?dir=exercises/integration&file=exercise_01">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/integration&file=exercise_02">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/integration&file=exercise_03">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/integration&file=challenge">
                                Desafio
                            </a>
                        </li>
                    <ul>
			    </div>
                <div class="module green">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercises.php?dir=exercises/types&file=integer">
                                Inteiros
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/types&file=float">
                                Float
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/types&file=arithmetic">
                                Aritmética
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/types&file=string">
                                String
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/types&file=boolean">
                                Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/types&file=convert">
                                Conversões
                            </a>
                        </li>
                    </ul>
			    </div>
                <div class="module black">
                    <h3>Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercises.php?dir=exercises/variable&file=variable">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/variable&file=challengeEquation">
                                Desafio
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/variable&file=attrib">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/variable&file=interpolation">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/variable&file=variableVariable">
                                Variáveis Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/variable&file=valuePerReference">
                                Valor ou Referêcia
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/variable&file=constant">
                                Constantes
                            </a>
                        </li>
                    </ul>                    
			    </div>
                <div class="module pink">
                    <h3>Condicionais</h3>
                    <ul>
                        <li>
                            <a href="exercises.php?dir=exercises/control&file=ifElse">
                                IF/ELSE
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/control&file=relational">
                                Op Relacionais
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/control&file=challengePI">
                                Desafio PI
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/control&file=logic">
                                Op Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/control&file=challengeOperator">
                                Desafio Op
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/control&file=ternary">
                                Op Ternário
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/control&file=switch">
                                Switch
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/control&file=challengeSwitch">
                                Desafio Switch
                            </a>
                        </li>
                    </ul>                    
			    </div>
                <div class="module brown">
                    <h3>Array</h3>
                    <ul>
                        <li>
                            <a href="exercises.php?dir=exercises/array&file=basic">
                                Basico
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/array&file=mapArray">
                                Mapas
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/array&file=challengeIndex">
                                Desafio Index
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/array&file=challengeMonths">
                                Desafio Meses
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/array&file=operatorArray">
                                Operações com Arrays
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/array&file=challengeArray">
                                Desafio Sorteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercises.php?dir=exercises/array&file=multi">
                                Multidimensionais
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
