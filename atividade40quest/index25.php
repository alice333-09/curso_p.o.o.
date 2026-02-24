<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 25</title>
</head>
<body>
    <h2>Comparador de Números</h2>
    <form method="POST">
        Número 1: <input type="number" name="n1" required><br><br>
        Número 2: <input type="number" name="n2" required><br><br>
        <input type="submit" value="Comparar">
    </form>

    <?php
    
        $n1 = floatval($_POST['n1']);
        $n2 = floatval($_POST['n2']);

        if ($n1 == $n2) {
            echo "<h3>Os números são IGUAIS.</h3>";
        } else {
            echo "<h3>Os números são DIFERENTES.</h3>";
            
            if ($n1 > $n2) {
                echo "O primeiro número ($n1) é maior que o segundo ($n2).";
            } else {
                echo "O segundo número ($n2) é maior que o primeiro ($n1).";
            }
        }
    
    ?>
</body>
</html>