<!DOCTYPE html>
<html lang="pt-br">
<body>
    <h2>Sistema de Categorias - Seguro</h2>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        Idade: <input type="number" name="idade" required><br><br>
        Grupo de Risco: 
        <select name="risco">
            <option value="1">Baixo</option>
            <option value="2">Médio</option>
            <option value="3">Alto</option>
        </select><br><br>
        <button type="submit">Determinar Categoria</button>
    </form>

    <?php

        $nome = $_POST['nome'];
        $idade = intval($_POST['idade']);
        $risco = intval($_POST['risco']);
        $categoria = null;

        
        if ($idade < 17 || $idade > 70) {
            echo "<h3>Olá $nome, sua idade ($idade anos) não está na faixa permitida para o seguro.</h3>";
        } else {

            if ($idade >= 17 && $idade <= 20) {
                $categorias_possiveis = [1, 2, 3]; 
            } elseif ($idade >= 21 && $idade <= 24) {
                $categorias_possiveis = [2, 3, 4];
            } elseif ($idade >= 25 && $idade <= 34) {
                $categorias_possiveis = [3, 4, 5];
            } elseif ($idade >= 35 && $idade <= 64) {
                $categorias_possiveis = [4, 5, 6];
            } else { // 65 a 70 anos
                $categorias_possiveis = [7, 8, 9];
            }

            $categoria = $categorias_possiveis[$risco - 1];

            echo "<h3>Resultado:</h3>";
            echo "Nome: $nome <br>";
            echo "Idade: $idade anos <br>";
            echo "<b>Categoria: $categoria</b>";
        }
    
    ?>
</body>
</html>