<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 37 - Peso Ideal</title>
</head>
<body>

    <form method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        
        Sexo: 
        <input type="radio" name="sexo" value="M" checked> Masculino
        <input type="radio" name="sexo" value="F"> Feminino<br><br>
        
        Altura (ex: 1.75): <input type="number" step="0.01" name="altura" required><br><br>
        Idade: <input type="number" name="idade" required><br><br>
        
        <input type="submit" value="Calcular Peso Ideal">
    </form>

    <?php
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $h = floatval($_POST['altura']);
        $idade = intval($_POST['idade']);
        $peso_ideal = 0;

        if ($sexo == "M") {
            // Lógica Masculina
            if ($h > 1.70) {
                if ($idade <= 20) { $peso_ideal = (72.7 * $h) - 58; }
                elseif ($idade >= 21 && $idade <= 39) { $peso_ideal = (72.7 * $h) - 53; }
                else { $peso_ideal = (72.7 * $h) - 45; } 
            } else {
                if ($idade <= 40) { $peso_ideal = (72.7 * $h) - 50; }
                else { $peso_ideal = (72.7 * $h) - 58; } 
            }
        } else {
            
            if ($h > 1.50) {
                $peso_ideal = (62.1 * $h) - 44.7;
            } else {
                if ($idade >= 35) { $peso_ideal = (62.1 * $h) - 45; }
                else { $peso_ideal = (62.1 * $h) - 49; } // < 35
            }
        }

        echo "<hr><h3>Resultado:</h3>";
        echo "Nome: <b>$nome</b><br>";
        echo "Peso Ideal: <b>" . $peso_ideal . " kg</b>";
    
    ?>
</body>
</html>