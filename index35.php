<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 35 - Categorias de Natação</title>
</head>
<body>

    <form method="POST">
        Idade do Nadador: <input type="number" name="idade" required>
        <input type="submit" value="Classificar">
    </form>

    <?php

        $idade = intval($_POST['idade']);
        $categoria = "";

        if ($idade >= 5 && $idade <= 7) {
            $categoria = "Infantil A";
        } elseif ($idade >= 8 && $idade <= 10) {
            $categoria = "Infantil B";
        } elseif ($idade >= 11 && $idade <= 13) {
            $categoria = "Juvenil A";
        } elseif ($idade >= 14 && $idade <= 17) {
            $categoria = "Juvenil B";
        } elseif ($idade >= 18 && $idade <= 25) {
            $categoria = "Sênior";
        } else {
            $categoria = "Idade fora da faixa etária";
        }

        echo "<h3>Resultado: $categoria</h3>";
    ?>
</body>
</html>