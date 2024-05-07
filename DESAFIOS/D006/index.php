<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Anatomia de uma divisão</h1>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="n1">Dividendo</label>
            <input type="number" name="n1" id="n1">
            <label for="n2">Divisor</label>
            <input type="number" name="n2" id="n2">
            <input type="submit" value="Analisar">
            </form>
    </main>
    <main>
        <h2>Estrutura da Divisão</h2>
        <ul>
            <?php
                $nu1 = $_GET["n1"]??0;
                $nu2 = $_GET["n2"]??1;
                $re = $nu1 / $nu2;
                $resto = $nu1 % $nu2;
                //echo "$nu1|$nu2";=
                ?>
        </ul>
        <ul>
        </ul>
        <table class="divisao">
            <tr>
                <td><?=$nu1?></td>
                <td><?=$nu2?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$re?></td>
            </tr>
        </table>

    </main>    

</body>
</html>