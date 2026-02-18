<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 39 - Classificação de Estudante</title>
</head>
<body>
    
    <form method="POST">
        <label>Nome do Estudante:</label><br>
        <input type="text" name="nome" required><br><br>
        
        <label>Número de Matrícula:</label><br>
        <input type="text" name="matricula" required><br><br>
        
        <label>Trabalho de Laboratório (Peso 2):</label><br>
        <input type="number" step="0.1" min="0" max="10" name="n1" required><br><br>
        
        <label>Avaliação Semestral (Peso 3):</label><br>
        <input type="number" step="0.1" min="0" max="10" name="n2" required><br><br>
        
        <label>Exame Final (Peso 5):</label><br>
        <input type="number" step="0.1" min="0" max="10" name="n3" required><br><br>
        
        <input type="submit" value="Calcular e Classificar">
    </form>

    <?php

        $nome = $_POST['nome'];
        $matricula = $_POST['matricula'];
        $n1 = floatval($_POST['n1']);
        $n2 = floatval($_POST['n2']);
        $n3 = floatval($_POST['n3']);

        $nota_final = (($n1 * 2) + ($n2 * 3) + ($n3 * 5)) / 10;

        if ($nota_final >= 8 && $nota_final <= 10) {
            $classificacao = "A";
        } elseif ($nota_final >= 7 && $nota_final < 8) {
            $classificacao = "B";
        } elseif ($nota_final >= 6 && $nota_final < 7) {
            $classificacao = "C";
        } elseif ($nota_final >= 5 && $nota_final < 6) {
            $classificacao = "D";
        } else {
            $classificacao = "R";
        }

     
        echo "<hr>";
        echo "<h3>Relatório Final</h3>";
        echo "Estudante: <b>$nome</b><br>";
        echo "Matrícula: <b>$matricula</b><br>";
        echo "Nota Final: <b>" . $nota_final . "</b><br>";
        echo "Classificação:" . $classificacao;
    
    ?>
</body>
</html>