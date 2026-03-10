<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculaora</title>
    <?php 
        require 'somar.class.php';
        require 'subtrair.class.php'; 
    ?>
</head>

<body>
    <form action="" method="POST">
        <label>Primeiro número:</label><br>
        <input type="number" name="n1" ><br><br>
        <label>Segundo número:</label><br>
        <input type="number" name="n2" required><br><br>

        <button type="submit" name="operacao" value="mais">+</button>
        <button type="submit" name="operacao" value="menos">-</button>
        <button type="submit" name="operacao" value="divi">%</button>
        <button type="submit" name="operacao" value="multi">x</button>
        <br><br>

    </form>
    <?php
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $op = $_POST['operacao'];

    $calcsoma = new Somar($num1, $num2);
    $calcsub = new Subtrair($num1, $num2);


    if($op == 'mais'){
        echo "Resultado: " . $calcsoma->calcularSoma();
    } elseif ($op == 'menos'){
        echo "Resultado: " . $calcsub->calcularSubtracao();
    }
    ?>
</body>

</html>