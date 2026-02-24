<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>>Exercício 11 - Cálculo de Venda</title>
</head>
<body>

    <form method="POST">
        <label>Preço de Custo (R$):</label><br>
        <input type="number" name="custo" required >
        <br><br>

        <label>Percentual de Acréscimo (%):</label><br>
        <input type="number" name="percentual" required>
        <br><br>

        <input type="submit" value="Calcular Preço de Venda">
    </form>

    <?php
   
        $custo =$_POST['custo'];
        $percentual =$_POST['percentual'];

        $acrescimo = $custo * ($percentual / 100);
        
        $venda = $custo + $acrescimo;

        echo "<h3>Resultado:</h3>";
        echo "Custo original: R$ " . $custo . "<br>";
        echo "Acréscimo de (" . $percentual . "%): R$ " . $acrescimo . "<br>";
        echo "Preço de Venda sugerido: R$ " . $venda ;
    
    ?>

</body>
</html>