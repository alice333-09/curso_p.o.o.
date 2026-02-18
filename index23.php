<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 23</title>
</head>
<body>
    <h2>Verificar Número (Regras Específicas)</h2>
    <form method="POST">
        Digite um número: <input type="number"name="numero" required>
        <input type="submit" value="Verificar">
    </form>

    <?php 

        $n = floatval($_POST['numero']);

        if ($n > 80 || $n < 25 || $n == 40) {
            echo "<h3>O número $n atende aos critérios da regra.</h3>";
        } else {
            echo "<h3>O número $n NÃO atende aos critérios.</h3>";
        }
    
    ?>
</body>
</html>