<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="number">primeiro numero:</label><br>
        <input type="number" name="num1" id="num"><br>

        <label for="number">segundo numero:</label><br>
        <input type="number" name="num2" id="num"><br><br>

        <button type="submit">enviar</button>

    </form><br>
    <?php
        $numero1=$_POST['num1'];
        $numero2=$_POST['num2'];
        $soma= $numero1 + $numero2;
        $multi= $numero1 * $numero2;
        $sub= $numero1 - $numero2;
        $div= $numero1 / $numero2;
        echo "soma:$soma
        multiplicaçaõ:$multi
        subtração:$sub
        divisão:$div";
    ?>
</body>
</html>