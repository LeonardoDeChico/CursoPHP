<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleatorio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <h1>Trabalhando com números aleatórios</h1>
    <p>Gerando um número aleatório entre 0 e 100...</p>
    <?php 
    //rand() acaba se tornarndo uma função lenta
    //o correto a se usar é mt_rand()
    echo "O valor gerado foi <strong>" . rand(0, 100), "</strong>\n";
    ?>
    <button onclick="javascript:history.go(-0)">&#x2b05;Gerar outro</button>
    </main>
</body>
</html>