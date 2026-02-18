<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 14 - Qual é o maior?</title>
</head>
<body>
   
    <form method="POST">
        <input type="number" name="n1"  required>
        <input type="number" name="n2" required>
        <input type="submit" value="Verificar Maior">
    </form>

    <?php

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];

        if ($n1 > $n2) {
            echo "<h3>O maior valor é: $n1</h3>";
        } elseif ($n2 > $n1) {
            echo "<h3>O maior valor é: $n2</h3>";
        } else {
            echo "<h3>Os valores são iguais.</h3>";
        }
    
    ?>
</body>
</html>