<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 32 - Operações</title>
</head>
<body>

    <form method="POST">
        Valor A: <input type="number" name="a" required><br><br>
        Valor B: <input type="number" name="b" required><br><br>
        Operador (+, -, *, /): <input type="text" name="c" maxlength="1" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php

        $a = floatval($_POST['a']);
        $b = floatval($_POST['b']);
        $c = $_POST['c'];
        $resultado = null;
        $erro = "";

        switch ($c) {
            case '+': $resultado = $a + $b; break;
            case '-': $resultado = $a - $b; break;
            case '*': $resultado = $a * $b; break;
            case '/':
                if ($b == 0) {
                    $erro = "Erro: Divisão por zero não permitida!";
                } else {
                    $resultado = $a / $b;
                }
                break;
            default:
                $erro = "Operador não definido!";
                break;
        }

        echo "<h3>Resultado:</h3>";
        if ($erro != "") {
            echo "<b'>$erro</b>";
        } else {
            echo "$a $c $b = <b>$resultado</b>";
        }
    
    ?>
</body>
</html>