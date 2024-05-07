<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label><strong>Em que ano você nasceu?</strong></label>
        <input type="number" name="anonasc" id="anonasc" value="0">
        <label><strong>Quer saber sua idade em que ano? (atualmente estamos em 2024)</strong></label>
        <input type="number" name="anodese" id="anodese" value="0">
        <input type="submit" value="Qual será minha idade?">
    </form>
    </main>
    <?php 
    $anonasc = $_GET["anonasc"]??0;
    $anodese = $_GET["anodese"]??0;
    $anoatual = ($anodese-$anonasc);
    ?>
    <main>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$anonasc?> vai ter <strong><?=$anoatual?> anos</strong> em <?=$anodese?>!</p>
    </main>
    
</body>
</html>