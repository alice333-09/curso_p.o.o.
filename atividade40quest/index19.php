<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 19 - Contagem de Homens e Mulheres</title>
</head>
<body>
    <form method="POST">
        <p>Digite <b>Nome:M</b> ou <b>Nome:F</b> (um por linha):</p>
        <textarea name="dados" rows="8"equired></textarea><br>
        <button type="submit">Contabilizar</button>
    </form>

    <?php
    if ($_POST) {
        $linhas = explode("\n", $_POST['dados']);
        $m = 0; $f = 0;

        foreach ($linhas as $l) {
            $partes = explode(':', $l);
            
            if (count($partes) == 2) {
                $sexo = strtoupper(trim($partes[1]));

                // Contagem simples
                if ($sexo == 'M') $m++;
                if ($sexo == 'F') $f++;
                
                // Exibe o nome e o status usando ternário
                $status = ($sexo == 'M') ? "Homem" : "Mulher";
                echo "Nome: $partes[0] - $status <br>";
            }
        }

        echo "<h3>Total: M: $m | F: $f</h3>";
    }
    ?>
</body>
</html>