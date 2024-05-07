<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" 
        method="get">
        <label><strong>Número</strong></label>
        <input type="number" min= "1" name="num" id="num" value="0">
        <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <main>
        <h2>Resultado final</h2>
        <?php 
        $num = $_GET["num"]??0;
        $rq = sqrt($num); 
        $rc = ($num ** (1/3))
        ?>
        <p>Analisando o <strong>número <?=$num?></strong>, temos:</p>
        <ul>  
            A sua raiz quadrada é <strong><?=number_format($rq, 3, ",", ".")?></strong>
        </ul> 
        <ul>
           A sua raiz cúbica é <strong><?=number_format($rc, 3, ",", ".")?></strong>
        </ul>
        

    </main>
</body>
</html>