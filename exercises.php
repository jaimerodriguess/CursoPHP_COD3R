<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/exercises.css">
    <title>Curso PHP</title>
</head>
<body class="exercises">
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Visualização dos Exercícios</h2>
    </header>

    <nav class="navigation">
        <a href=<?="{$_GET['dir']}/{$_GET['file']}.php"?> class="green">Sem formatação</a>
        <a href="index.php" class="red">Voltar</a>
    </nav>

    <main class="main">
        <div class="content">
            <?php
                //include($_GET['dir']."/".$_GET['file'].".php");
                include("{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS PHP <?= date('Y');?>
    </footer>
</body>
</html>