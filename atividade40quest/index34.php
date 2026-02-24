<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 34 - Escola Aprender</title>
</head>
<body>

    <form method="POST">
        Nível do Professor (1, 2 ou 3): 
        <input type="number" name="nivel" min="1" max="3" required><br><br>
        
        Quantidade de Horas/Aula: 
        <input type="number" name="horas" required><br><br>
        
        <input type="submit" value="Calcular Salário">
    </form>

    <?php

        $nivel = intval($_POST['nivel']);
        $horas = intval($_POST['horas']);
        $valor_hora = 0;

        switch ($nivel) {
            case 1: $valor_hora = 12.00; break;
            case 2: $valor_hora = 17.00; break;
            case 3: $valor_hora = 25.00; break;
            default: $valor_hora = 0; break;
        }

        if ($valor_hora > 0) {
            $salario = $horas * $valor_hora;
            echo "<h3>Resultado do Cálculo:</h3>";
            echo "Nível do Professor: $nivel<br>";
            echo "Valor da Hora/Aula: R$ " . $valor_hora . "<br>";
            echo "<b>Salário Total: R$ " . $salario . "</b>";
        } else {
            echo "<h3>Nível Inválido!</h3>";
        }
    
    ?>
</body>
</html>