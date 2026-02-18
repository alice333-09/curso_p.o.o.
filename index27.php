<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 27</title>
</head>
<body>
    <h2>Carango - Desconto por Combustível</h2>
    <form method="POST">
        Valor do Veículo: <input type="number"  name="valor" required><br><br>
        Combustível: 
        <select name="combustivel">
            <option value="alcool">Álcool</option>
            <option value="gasolina">Gasolina</option>
            <option value="diesel">Diesel</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php

        $valor = $_POST['valor'];
        $combustivel = $_POST['combustivel'];

        if ($valor == 0) {
            echo "<h3>Entrada encerrada.</h3>";
        } else {
            if ($combustivel == "alcool") $p = 0.25;
            elseif ($combustivel == "gasolina") $p = 0.21;
            else $p = 0.14; 

            $desconto = $valor * $p;
            $total = $valor - $desconto;

            echo "<h3>Resumo:</h3>";
            echo "Desconto (" . ($p*100) . "%): R$ " . $desconto . "<br>";
            echo "Valor a pagar: R$ " . $total;
        }
    
    ?>
</body>
</html>