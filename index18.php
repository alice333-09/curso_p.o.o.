
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 18 - Verificador de Maioridade</title>
</head>
<body>

    <form method="POST">
        <label>Digite as idades (separadas por espaço):</label><br>
        <textarea name="idades" rows="5" cols="40" required></textarea><br>
        <input type="submit" value="Verificar Idades">
    </form>

    <?php

        $input = $_POST['idades'];
        $idades = preg_split('/[\s,]+/', $input);

        echo "<h3>Status por Pessoa:</h3><ul>";
        foreach ($idades as $indice => $idade) {
            $idade = intval($idade);
            $status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
            echo "<li>Pessoa " . ($indice + 1) . " ($idade anos): <b>$status</b></li>";
        }
        echo "</ul>";
    ?>
</body>
</html>