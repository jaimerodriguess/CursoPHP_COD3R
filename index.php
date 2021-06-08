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
                <?php
                    include_once('menu/chapter10.html');
                    include_once('menu/chapter9.html');
                    include_once('menu/chapter8.html');
                    include_once('menu/chapter7.html');
                    include_once('menu/chapter6.html');
                    include_once('menu/chapter5.html');
                    include_once('menu/chapter4.html');
                    include_once('menu/chapter3.html');
                    include_once('menu/chapter2.html');
                    include_once('menu/chapter1.html');
                ?>
            </nav>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS PHP <?= date('Y');?>
    </footer>
</body>
</html>
