<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 36 - Conta de Luz</title>
</head>
<body>

    <form method="POST">
        Tipo de Cliente:<br>
        <input type="radio" name="tipo" value="1" checked> 1 - Residência (R$ 0,60/KWh)<br>
        <input type="radio" name="tipo" value="2"> 2 - Comércio (R$ 0,48/KWh)<br><br>
        
        Consumo Total (KW/h):<br>
        <input type="number" step="0.01" name="consumo" required><br><br>
        
        <input type="submit" value="Calcular Conta">
    </form>

    <?php

        $tipo = $_POST['tipo'];
        $consumo = floatval($_POST['consumo']);
        $valor_kwh = 0;

        switch ($tipo) {
            case "1":
                $valor_kwh = 0.60;
                $nome_tipo = "Residência";
                break;
            case "2":
                $valor_kwh = 0.48;
                $nome_tipo = "Comércio";
                break;
        }

        $total = $consumo * $valor_kwh;

        echo "<h3>Fatura de Energia</h3>";
        echo "Tipo de Cliente: $nome_tipo<br>";
        echo "Consumo: $consumo KW/h<br>";
        echo "Valor Unitário: R$ " . $valor_kwh . "<br>";
        echo "<b>Total a Pagar: R$ " . $total . "</b>";
    
    ?>
</body>
</html>