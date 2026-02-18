<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 30 - Salário Líquido</title>
</head>
<body>


    <form method="POST">
        <label>Nome do Funcionário:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade" required><br><br>

        <label>Sexo:</label><br>
        <input type="radio" name="sexo" value="M" checked> Masculino
        <input type="radio" name="sexo" value="F"> Feminino<br><br>

        <label>Salário Fixo (R$):</label><br>
        <input type="number" step="0.01" name="salario_fixo" required><br><br>

        <input type="submit" value="Calcular Salário">
    </form>

    <?php
   
        $nome = $_POST['nome'];
        $idade = intval($_POST['idade']);
        $sexo = $_POST['sexo'];
        $salario_fixo = floatval($_POST['salario_fixo']);
        $abono = 0;

      
        if ($sexo == "M") {
            if ($idade >= 30) {
                $abono = 100.00;
            } else {
                $abono = 50.00;
            }
        } else { 
            if ($idade >= 30) {
                $abono = 200.00;
            } else {
                $abono = 80.00;
            }
        }

        $salario_liquido = $salario_fixo + $abono;

        echo "<hr>";
        echo "<h3>Resultado:</h3>";
        echo "Funcionário: <b>$nome</b><br>";
        echo "Abono recebido: R$ " . $abono . "<br>";
        echo "Salário Líquido: <b>R$ " . $salario_liquido . "</b>";

    ?>

</body>
</html>