<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 17 -Contagem no Intervalo [10, 150]</title>
</head>
<body>

    <form method="POST">
        <label>Cole aqui os números (separados por espaço ou vírgula):</label><br>
        <textarea name="lista_numeros" rows="5" cols="40" required></textarea><br>
        <input type="submit" value="Processar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['lista_numeros'];
       
        $numeros = preg_split('/[\s,]+/', $input);
        $total_no_intervalo = 0;

        foreach ($numeros as $n) {
            $n = floatval($n);
            if ($n >= 10 && $n <= 150) {
                $total_no_intervalo++;
            }
        }
        echo "<h3>Resultado:</h3>";
        echo "Foram analisados " . count($numeros) . " números.<br>";
        echo "Total dentro do intervalo [10, 150]: <b>$total_no_intervalo</b>";
    }
    ?>
</body>
</html>