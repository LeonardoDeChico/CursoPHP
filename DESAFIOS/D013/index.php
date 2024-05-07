<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

	$saque = $_GET['valor']??0;
    $resto = $saque;
            
    $tot100 = floor($resto/100);
    $resto %= 100;
            
    $tot50 =  floor($resto/50);
    $resto %= 50;
            
    $tot10 = floor($resto/10);
    $resto %= 10;
        
    $tot5 = floor($resto/5);
    $resto %= 5;
           
    ?>
    <main>
        <h1>Caixa eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="val"><strong>Qual valor você deseja sacar? (R$)</strong></label>
            <input type="number" name="valor" id="valor" min="0" step="5" value="0">
            <input type="submit" value="Sacar">
        </form>
    </main>
    <main>
        <h2>Saque de R$<?=$saque?> realizado </h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg"    alt="opa">x<?=$tot100?></li>
            <li><img src="img/50-reais.jpg" alt="opa">x<?=$tot50?></li>
            <li><img src="img/10-reais.jpg" alt="opa">x<?=$tot10?></li>
            <li><img src="img/5-reais.jpg" alt="opa">x<?=$tot5?></li>
        </ul>
    </main>
    
</body>
</html>