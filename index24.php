<!DOCTYPE html>
<html lang="pt-br">
<head><meta charset="UTF-8"><title>Exercício 24</title></head>
<body>
    <h2>Análise de Valor (Natureza do Número)</h2>
    <form method="POST">
        Número: <input type="number" name="valor" required>
        <input type="submit" value="Analisar">
    </form>

    <?php
   
        $valor = floatval($_POST['valor']);

        if ($valor > 0) {
            echo "<h3>O número $valor é POSITIVO.</h3>";
        } elseif ($valor < 0) {
            echo "<h3>O número $valor é NEGATIVO.</h3>";
        } else {
            echo "<h3>O valor informado é ZERO.</h3>";
        }
    
    ?>
</body>
</html>
