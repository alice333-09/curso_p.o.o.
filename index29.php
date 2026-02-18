<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 29 - Meses</title>
</head>
<body>

    <h2>Verificar Nome do Mês</h2>

    <form method="POST">
        <label>Digite o número do mês (1 a 12):</label><br>
        <input type="number" name="num_mes" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
 
        $num = intval($_POST['num_mes']);

        echo "<h3>Resultado:</h3>";

        // Estrutura Switch/Case
        switch ($num) {
            case 1:  echo "Janeiro";   break;
            case 2:  echo "Fevereiro"; break;
            case 3:  echo "Março";     break;
            case 4:  echo "Abril";     break;
            case 5:  echo "Maio";      break;
            case 6:  echo "Junho";     break;
            case 7:  echo "Julho";     break;
            case 8:  echo "Agosto";    break;
            case 9:  echo "Setembro";  break;
            case 10: echo "Outubro";   break;
            case 11: echo "Novembro";  break;
            case 12: echo "Dezembro";  break;
            default:
                echo "Mês inválido! Por favor, digite um número entre 1 e 12.";
                break;
        }
    
    ?>

</body>
</html>
