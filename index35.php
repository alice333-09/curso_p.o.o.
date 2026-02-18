<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10 - Loja Mamão com Açúcar</title>
</head>
<body>

    <form method="POST">
        <label>Valor Total da Compra (R$):</label><br>
        <input type="number" name="valor_total" required >
        <br><br>

        <input type="submit" value="Calcular Prestações">
    </form>

    <?php

        $valor_total = $_POST['valor_total'];

        $valor_prestacao = $valor_total / 5;

        echo "Valor total da compra: R$ " . $valor_total . "<br>";
        echo "Você pagará em 5 prestações de R$ " . $valor_prestacao . "sem juros.";

    ?>

</body>
</html>