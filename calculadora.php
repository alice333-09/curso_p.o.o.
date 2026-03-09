<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculaora</title>
    <?php require 'somar.class.php';?>
</head>
<body>
    <form action="" method="POST">
    <label for="number">primeiro número:</label><br>
        <input type="number" name="n1" id="num"><br>
    <label for="number">segundo número:</label><br>
        <input type="number" name="n2" id="num"><br>
    <button type="submit">ENVIAR</button>
    </form>
    <?php
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $calculadora = new Somar($num1,$num2);
        echo $calculadora->calcularSoma();
    ?>
</body>
</html>