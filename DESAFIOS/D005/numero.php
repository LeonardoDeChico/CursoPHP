<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST["n"]?? 0;
            echo "<p> Analisando o número <strong>".number_format($num, 3, ",", ".")."</strong> informado pelo usuário: </p>"; 
            // number_format(0) é usana para definir quantas casas decimais iram ter
            // e o step="0.1" define no input exemplo: <input type="number" name="n" id="n" step="0.001">

            $int = (int)$num;
            $fra = $num - $int;

           echo "<ul><li> A parte interira do número é <strong>".number_format($num, 0, ",", ".")."</strong></li>";
           echo "<li> A parte fracionada do número é <strong>".number_format($fra, 3, ",", ".")."</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>