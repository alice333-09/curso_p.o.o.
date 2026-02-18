<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 16 - Média e Menção</title>
</head>
<body>

    <form method="POST">
        <input type="text" name="nome" placeholder="Nome do aluno" required><br><br>
        <input type="number" step="0.1" name="n1" placeholder="Nota 1" required><br>
        <input type="number" step="0.1" name="n2" placeholder="Nota 2" required><br>
        <input type="number" step="0.1" name="n3" placeholder="Nota 3" required><br><br>
        <input type="submit" value="Calcular Resultado">
    </form>

    <?php

        $nome = $_POST['nome'];
        $n1 = floatval($_POST['n1']);
        $n2 = floatval($_POST['n2']);
        $n3 = floatval($_POST['n3']);
        
        $media = ($n1 + $n2 + $n3) / 3;

        echo "<h3>Resultado do Aluno: $nome</h3>";
        echo "Média: " . $media . "<br>";

        if ($media >= 7) {
            echo "Menção: <b>APROVADO</b>";
        } elseif ($media <= 5) {
            echo "Menção: <b>REPROVADO</b>";
        } else {
            echo "Menção: <b>RECUPERAÇÃO</b>";
        }
    
    ?>
</body>
</html>