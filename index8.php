<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8 -Conversor de Moedas</title>
</head>
<body>
    <form method="POST">
        <label>Cotação do Dólar (R$):</label><br>
        <input type="number" name="cotacao" required>
        <br><br>

        <label>Quantidade de Dólares (US$):</label><br>
        <input type="number" name="dolares" required>
        <br><br>

        <input type="submit" value="Converter para Real"><br><br>
    </form>

    <?php
        $cotacao =$_POST['cotacao'];
        $dolares =$_POST['dolares'];

        $reais = $dolares * $cotacao;

        echo "Com a cotação a R$ ". $cotacao ;
        echo "seus US$ ". $dolares ."valem R$ ". $reais;
    ?>

</body>
</html>