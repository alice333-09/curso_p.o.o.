<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 38 - Média Ponderada</title>
</head>
<body>
    
    <form method="POST">
        <label>Trabalho de Laboratório (Peso 2):</label><br>
        <input type="number" step="0.1" min="0" max="10" name="n1" required><br><br>
        
        <label>Avaliação Semestral (Peso 3):</label><br>
        <input type="number" step="0.1" min="0" max="10" name="n2" required><br><br>
        
        <label>Exame Final (Peso 5):</label><br>
        <input type="number" step="0.1" min="0" max="10" name="n3" required><br><br>
        
        <input type="submit" value="Calcular Nota Final">
    </form>

    <?php

        $n1 = floatval($_POST['n1']);
        $n2 = floatval($_POST['n2']);
        $n3 = floatval($_POST['n3']);

        $p1 = 2;
        $p2 = 3;
        $p3 = 5;

        $soma_pesos = $p1 + $p2 + $p3;
        $nota_final = (($n1 * $p1) + ($n2 * $p2) + ($n3 * $p3)) / $soma_pesos;

        echo "<h3>Resultado:</h3>";
        echo "A nota final do estudante é: <b>" . $nota_final . "</b>";
    
    ?>
</body>
</html>