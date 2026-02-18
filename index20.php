<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 20 - Cálculo de Desconto</title>
</head>
<body>

    <form method="POST">
        <label>Ano do Veículo:</label><br>
        <input type="number" name="ano" required><br><br>
        
        <label>Valor do Veículo (R$):</label><br>
        <input type="number" name="valor" required><br><br>
        
        <input type="submit" value="Calcular Desconto">
    </form>

    <?php

        $ano = intval($_POST['ano']);
        $valor = floatval($_POST['valor']);

        $percentual = ($ano <= 2000) ? 0.12 : 0.07;
        
        $desconto = $valor * $percentual;
        $valor_final = $valor - $desconto;

        echo "<h3>Resultado:</h3>";
        echo "Desconto de " . ($percentual * 100) . "%: R$ " . $desconto . "<br>";
        echo "Valor final a pagar: <b>R$ " . $valor_final . "</b>";
    
    ?>
</body>
</html>