<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>>Exercício 15 - Verificar Intervalo</title>
</head>
<body>
 
    <form method="POST">
        <label>Digite um número:</label><br>
        <input type="number" name="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
  
        $num = floatval($_POST['numero']);

        if ($num >= 100 && $num <= 200) {
            echo "<h3>O número $num está no intervalo entre 100 e 200.</h3>";
        } else {
            echo "<h3>O número $num NÃO está no intervalo entre 100 e 200.</h3>";
        }

    ?>
</body>
</html>
