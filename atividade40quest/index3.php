<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Consumo Médio</title>
</head>
<body>
    <h2>Calcular Consumo do Automóvel</h2>
    
    <form method="POST" action="">
        <label>Distância total percorrida(km):</label><br>
        <input type="number" name="distancia"><br>
        
        <label>Combustível gasto(litros):</label><br>
        <input type="number" name="combustivel"><br>
        
        <button type="submit">Calcular Consumo</button>
    </form>

    <?php
        if (isset($_POST['distancia']) && isset($_POST['combustivel'])) {
        
        $distancia = $_POST['distancia'];
        $combustivel = $_POST['combustivel'];
        }
        if ($combustivel > 0) {
            $consumoMedio = $distancia / $combustivel;
            echo "CONSUMO MEDIO É: $consumoMedio";
        } else {
            echo "<p>O combustível gasto deve ser maior que zero!</p>";
        }
    ?>
</body>
</html>