<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 26</title>
</head>
<body>
    <h2>Escrever por Extenso</h2>
    <form method="POST">
        Digite um número (1 a 5): <input type="number" name="num" required>
        <input type="submit" value="Exibir">
    </form>

    <?php
    
        $num = intval($_POST['num']);

        switch ($num) {
            case 1: echo "<h3>Um</h3>"; break;
            case 2: echo "<h3>Dois</h3>"; break;
            case 3: echo "<h3>Três</h3>"; break;
            case 4: echo "<h3>Quatro</h3>"; break;
            case 5: echo "<h3>Cinco</h3>"; break;
            default: echo "<h3>Número inválido!</h3>"; break;
        }

    ?>
</body>
</html>
