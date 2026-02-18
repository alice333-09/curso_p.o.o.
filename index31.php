<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 31 - Ordem Crescente</title>
</head>
<body>

    <form method="POST">
        Valor 1: <input type="number" name="n1" required><br><br>
        Valor 2: <input type="number" name="n2" required><br><br>
        Valor 3: <input type="number" name="n3" required><br><br>
        <input type="submit" value="Ordenar">
    </form>

    <?php

        $n1 = intval($_POST['n1']);
        $n2 = intval($_POST['n2']);
        $n3 = intval($_POST['n3']);

        if ($n1 > $n2) { $temp = $n1; $n1 = $n2; $n2 = $temp; }
        if ($n1 > $n3) { $temp = $n1; $n1 = $n3; $n3 = $temp; }
        if ($n2 > $n3) { $temp = $n2; $n2 = $n3; $n3 = $temp; }

        echo "<h3>Valores em ordem crescente:</h3>";
        echo "$n1 - $n2 - $n3";

    ?>
</body>
</html>