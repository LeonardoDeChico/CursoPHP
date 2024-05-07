<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
        <label><strong>Salário (R$)</strong></label>
        <input type="number" min="1" name="num" id="num" step=".01">
        <p>Considerando o salário mínimo de <strong>R$1.380.00</strong></p>
        <input type="submit" value="Calcular">
    </main>
    <?php 
    $salabruto = 1380;
    $salario = $_GET["num"]??1380;
    $quantsal = intdiv($salario , $salabruto);
    $restsal =  $salario-($salabruto * $quantsal);

    //echo" você ganha um salario de R$:$salario,00 ganha ". number_format($quantsal, 0)." salarios minimos (+||-) R$:".number_format($restsal, 2,",",",")."";
    
    ?>
    <main>
        <h2>Resultado final</h2>
        <p><?="você ganha um salario de R$:".number_format($salario, 2, ",","." ) ." ganha <strong> $quantsal salarios minimos </strong> (+||-) R$: $restsal"?></p>
    
    </main>
</body>
</html>