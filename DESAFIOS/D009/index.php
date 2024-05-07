<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label><strong>1° Valor</strong></label>
        <input type="number" name="v1" id="v1">
        <label><strong>1° Peso</strong></label>
        <input type="number" name="p1" id="p1">
        <label><strong>2°valor</strong></label>
        <input type="number" name="v2" id="v2">
        <label><strong>2° Peso</strong></label>
        <input type="number" name="p2" id="p2">
        <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <?php 
    $v1 = $_GET ["v1"]??0;
    $p1 = $_GET ["p1"]??0;
    $v2 = $_GET ["v2"]??0;
    $p2 = $_GET ["p2"]??0;
    $mds = (($v1+$v2)/2);
    $mdp = ((($v1*$p1)+($v2*$p2)) / ($p1+$p2));
    ?>
    <main>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$v1?> e <?=$v2?>:</p>
        <ul>
            A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($mds, 2, ",", ".")?>
        </ul>
        <ul>
            A <strong>Média Aritimética Ponderada</strong> com pesos <?=$p1?> e <?=$p2?> é igual a <?=number_format($mdp, 2)?>
        </ul>
    </main>
</body>
</html>