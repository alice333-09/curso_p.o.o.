<?php
    require_once 'index2.1.php';
    $gerente = new Gerente("Carlos",5000.00,1500.00);
    $estagiaria = new Estagiario("Ana",1200,200);
    echo "o salario final do gerente" . $gerente->getNome() . "é: R$" . $gerente->calcularSalario() . "<br>";
    echo "o salario final da estagiaria" . $estagiaria->getNome() . "é R$:" . $estagiaria->calcularSalario() . "<br>";

?>