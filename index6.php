<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> exercício 6 - Troca de Valores </title>
</head>
<body>

    <form method="POST">
        <label>Valor A:</label><br>
        <input type="text" name="valorA" required><br><br>

        <label>Valor B:</label><br>
        <input type="text" name="valorB" required><br><br>

        <input type="submit" value="Efetuar Troca">
    </form>

    <?php
        $a = $_POST['valorA'];
        $b = $_POST['valorB'];

        echo "Antes da troca: A =  $a e B =  $b <br>";

        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "Depois da troca: A = $a e B =  $b ";
    ?>

</body>
</html>