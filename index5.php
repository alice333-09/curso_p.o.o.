<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exercício 5 - Média</title>
</head>
<body>
    <form method="POST">
        Nome do Aluno: <input type="text" name="nome" required><br>
        Nota 1: <input type="number" name="n1" required><br>
        Nota 2: <input type="number" name="n2" required><br>
        Nota 3: <input type="number" name="n3" required><br>
        <button type="submit">Calcular Média</button>
    </form>

    <?php
        $nome = $_POST['nome'];
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];

        $media = ($n1 + $n2 + $n3) / 3;

        echo "O aluno $nome obteve a média: $media";
    ?>
</body>
</html>
