<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 28</title>
</head>
<body>
    <h2>Reajuste Salarial</h2>
    <form method="POST">
        Nome Funcionário: <input type="text" name="nome" required><br><br>
        Salário Atual: <input type="number" step="0.01" name="salario" required><br><br>
        Valor Salário Mínimo: <input type="number" step="0.01" name="minimo" required><br><br>
        <input type="submit" value="Calcular Reajuste">
    </form>

    <?php

        $nome = $_POST['nome'];
        $salario = floatval($_POST['salario']);
        $minimo = floatval($_POST['minimo']);

        $quantidade_minimos = $salario / $minimo;

        if ($quantidade_minimos < 3) {
            $percentual = 0.50; 
        } elseif ($quantidade_minimos >= 3 && $quantidade_minimos <= 10) {
            $percentual = 0.20; 
        } elseif ($quantidade_minimos > 10 && $quantidade_minimos <= 20) {
            $percentual = 0.15;
        } else {
            $percentual = 0.10; 
        }

        $reajuste = $salario * $percentual;
        $novo_salario = $salario + $reajuste;

        echo "<h3>Folha de Pagamento - $nome</h3>";
        echo "Aumento aplicado: " . ($percentual * 100) . "%<br>";
        echo "Valor do reajuste: R$ " . $reajuste . "<br>";
        echo "Novo salário: <b>R$ " . $novo_salario . "</b><br><br>";
        echo "<i>A empresa aumentará sua folha em R$ " . $reajuste . " com este funcionário.</i>";
    
    ?>
</body>
</html>
