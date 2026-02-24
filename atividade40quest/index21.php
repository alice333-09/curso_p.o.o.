<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 21 - Verificação de Aptidão Militar</title>
</head>
<body>

    <form method="POST">
        Nome: <input type="text" name="nome" required><br><br>
        Sexo: 
        <input type="radio" name="sexo" value="M" checked> M 
        <input type="radio" name="sexo" value="F"> F <br><br>
        Idade: <input type="number" name="idade" required><br><br>
        Saúde (0 a 10): <input type="number" name="saude" placeholder="10 é perfeito" required><br><br>
        
        <input type="submit" value="Verificar">
    </form>

    <?php
   
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $idade = intval($_POST['idade']);
        $saude = intval($_POST['saude']);

        if ($sexo == "M" && $idade >= 18 && $saude >= 7) {
            echo "<h3>$nome, você está APTO para o serviço militar.</h3>";
        } else {
            echo "<h3>$nome, você NÃO está apto.</h3>";
        }

    ?>
</body>
</html>