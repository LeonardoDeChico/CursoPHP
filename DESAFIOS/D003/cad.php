<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><main>
    <?php 
    $vr = $_GET ["as"] ?? "sem valor!";
    $vd = ($vr / 5.22);
    echo "Seus R\$: $vr equivalem a US$".number_format($vd, 2,",").".";
    ?>
    </main>
</body>
</html>