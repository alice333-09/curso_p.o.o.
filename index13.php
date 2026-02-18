
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 13 - Verificar Número</title>
</head>
<body>

    <form method="POST">
        <label>Digite um número:</label><br>
        <input type="number" name="numero" required>
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
        $numero = floatval($_POST['numero']);

        
        if ($numero > 10) {
            echo "<h3>O número " . $numero . " é maior que 10!</h3>";
        } else {
        
            echo "<h3>O número informado não é maior que 10.</h3>";
        }
    ?>
</body>
</html>
