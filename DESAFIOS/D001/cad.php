<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
           <?php 
            $n = $_GET ["numero"] ?? "Sem numero!";
            
            echo "<p> número escolhido foi <strong>$n</strong>";
            echo "<br> O seu <em>antecessor</em> é ".($n - 1) ."\n";
            echo "<br> O seu <em>sucessor</em> é ". ($n + 1) ."\n"
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
    </main>
</body>
</html>