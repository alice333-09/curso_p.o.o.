<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 22 - -Análise de Produto </title>
</head>
<body>

    <form method="POST">
        Preço de Custo: <input type="number" name="custo" required><br><br>
        Preço de Venda: <input type="number" name="venda" required><br><br>
        <input type="submit" value="Verificar Margem">
    </form>

    <?php

        $custo = floatval($_POST['custo']);
        $venda = floatval($_POST['venda']);

        if ($venda > $custo) {
            $status = "LUCRO";
        } elseif ($venda < $custo) {
            $status = "PREJUÍZO";
        } else {
            $status = "EMPATE";
        }

        echo "<h3>Resultado: $status</h3>";
        echo "Diferença: R$ " . $venda - $custo;
    
    ?>
</body>
</html>