<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma Simples</title>
</head>
<body>
    <h2>Calculadora de Soma</h2>
    <form action="" method="POST">
        <label>Número 1:</label>
        <input type="number" name="num1"><br>
        
        <label>Número 2:</label>
        <input type="number" name="num2"><br>
        
        <button type="submit">Somar</button>
    </form>
    <?php
        $numero1 = $_POST['num1'];
        $numero2 = $_POST['num2'];
        $soma = $numero1 + $numero2;
        echo "<h2>O resultado da soma é: $soma</h2>";
    ?>
</body>
</html>