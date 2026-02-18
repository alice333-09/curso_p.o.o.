<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 12 - Custo de Carro Novo</title>
</head>
<body>

    <form method="POST">
        <label>Custo de Fábrica (R$):</label><br>
        <input type="number"  name="custo_fabrica" required>
        <br><br>
        <input type="submit" value="Calcular Custo Final">
    </form>

    <?php
    
        $custo_fabrica = floatval($_POST['custo_fabrica']);

        $valor_com_impostos = $custo_fabrica + ($custo_fabrica * 0.45);

        $custo_final = $valor_com_impostos + ($valor_com_impostos * 0.28);

        echo "<h3>Detalhamento de Custos:</h3>";
        echo "Custo de Fábrica: R$ " . $custo_fabrica . "<br>";
        echo "Valor com Impostos (45%): R$ " . $valor_com_impostos . "<br>";
        echo "Preço Final ao Consumidor: R$ " . $custo_final ;
    
    ?>
</body>
</html>