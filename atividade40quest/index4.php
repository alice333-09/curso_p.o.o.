<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Vendas</title>
</head>
<body>
    <form method="post" action="">
        <label>Nome do Vendedor:</label><br>
        <input type="text" name="vendedor"><br><br>

        <label>Salário Fixo (R$):</label><br>
        <input type="number" name="salario_fixo" ><br><br>

        <label>Total de Vendas no Mês (R$):</label><br>
        <input type="number" name="vendas_mes" ><br><br>

        <button type="submit">Calcular Total</button>
    </form>

    <?php
    if (isset($_POST['vendedor']) && isset($_POST['salario_fixo']) && isset($_POST['vendas_mes'])) {
        
        $nome = $_POST['vendedor'];
        $salariofixo = $_POST['salario_fixo'];
        $totalVendas = $_POST['vendas_mes'];

        $comissao = $totalVendas * 0.15;

        $salarioFinal = $salariofixo + $comissao;
        echo "Vendedor:$nome<br>";
        echo "Salário Fixo: R$ $salariofixo<br>";
        echo "Comissão: R$$comissao<br>";
        echo "Salário Final: R$$salarioFinal";
    }
    ?>
</body>
</html>
