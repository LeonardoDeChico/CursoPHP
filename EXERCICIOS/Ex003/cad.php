<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Porecessamento</h1>
    </header>
    <main>
        <?php
            $n = $_GET["nome"] ?? "Sem nome";
            $s = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer te conhecer, $n $s! Este é o meu site"
        ?>
        <p><a href="javascript:history.go(-1)">Volta para a página anterior</a></p>
    </main>
    
</body>
</html>