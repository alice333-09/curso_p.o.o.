<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 7 - Conversor Celsius para Fahrenheit</title>
</head>
<body>

    <form method="POST">
        <label>Temperatura em Celsius (°C):</label><br>
        <input type="number" name="celsius" required >
        <br><br>

        <input type="submit" value="Converter para Fahrenheit">
    </form>

    <?php
        $celsius = $_POST['celsius'];

        $fahrenheit = ($celsius * 1.8) + 32;
        echo "A temperatura de" . $celsius . "°C é igual a " . $fahrenheit . "°F";

    ?>

</body>
</html>
