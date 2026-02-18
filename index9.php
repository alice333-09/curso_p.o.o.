<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9 - Rendimento de Poupança</title>
</head>
<body>

    <form method="POST">
        <label>Valor Depositado (R$):</label><br>
        <input type="number" name="valor_deposito" required >
        <br><br>

        <input type="submit" value="Calcular Rendimento">
    </form>

    <?php
        $valor_deposito = $_POST['valor_deposito'];

        $valor_com_rendimento = $valor_deposito * 1.007;

        echo "Valor original depositado: R$ " . $valor_deposito . "<br>";
        echo "Valor com rendimento após 1 mês: R$ " . $valor_com_rendimento;

    ?>

</body>
</html>