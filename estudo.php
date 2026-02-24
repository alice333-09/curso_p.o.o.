<?php

// 1. A CLASSE (O Molde)
class Carro {
    // Atributos (Características que o objeto vai ter)
    public $marca;
    public $cor;

    // Método Construtor (Serve para dar os dados iniciais ao criar o objeto)
    public function __construct($marca, $cor) {
        $this->marca = $marca;
        $this->cor = $cor;
    }

    // Método (Comportamento: O que o carro faz)
    public function acelerar() {
        return "O carro {$this->marca} {$this->cor} está acelerando... Vrummm!";
    }
}

// ---------------------------------------------------------

// 2. O OBJETO (A criação real usando o molde)

// Criando o primeiro objeto (Instanciando a classe)
$meuCarro = new Carro("Ferrari", "Vermelha");

// Criando o segundo objeto (Outra instância independente)
$carroDoVizinho = new Carro("Fusca", "Azul");

// Exibindo os resultados
echo $meuCarro->acelerar(); 
// Saída: O carro Ferrari Vermelha está acelerando... Vrummm!

echo "<br>";

echo $carroDoVizinho->acelerar(); 
// Saída: O carro Fusca Azul está acelerando... Vrummm!

?>