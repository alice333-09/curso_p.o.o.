<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 33 - Triângulos</title>
</head>
<body>

    <form method="POST">
        Lado A: <input type="number" name="a" required><br><br>
        Lado B: <input type="number" name="b" required><br><br>
        Lado C: <input type="number" name="c" required><br><br>
        <input type="submit" value="Verificar Tipo">
    </form>

    <?php

        $a = intval($_POST['a']);
        $b = intval($_POST['b']);
        $c = intval($_POST['c']);

     
        if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
            
            if ($a == $b && $b == $c) {
                echo "<h3>É um Triângulo Equilátero</h3>";
                echo "Todos os lados são iguais.";
            } elseif ($a == $b || $a == $c || $b == $c) {
                echo "<h3>É um Triângulo Isósceles</h3>";
                echo "Possui dois lados iguais.";
            } else {
                echo "<h3>É um Triângulo Escaleno</h3>";
                echo "Todos os lados são diferentes.";
            }

        } else {
            echo "<h3>Os valores informados não podem formar um triângulo.</h3>";
        }
    
    ?>
</body>
</html>