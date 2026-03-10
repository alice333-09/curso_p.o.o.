<?php
    class calculadora {
        public float $n1;
        public float $n2;

        public function __construct($n1,$n2){
            $this->n1 = $n1;
            $this->n2 = $n2;
        }
        public function calcularSoma(){
            $resultado = $this->n1 + $this->n2;
            return "A soma de {$this->n1} + {$this->n2} é igual a: $resultado ";
        }

        public function calcularSubtracao(){
            $resultado = $this->n1 - $this->n2;
            return "A subtração de {$this->n1} - {$this->n2} é igual a: $resultado ";
        }

        public function calcularMultiplicacao(){
            $resultado = $this->n1 * $this->n2;
            return "A multiplicação de {$this->n1} x {$this->n2} é igual a: $resultado ";
        }

        public function calcularDivisao(){
            $resultado = $this->n1 / $this->n2;
            return "A divisão de {$this->n1} % {$this->n2} é igual a: $resultado ";
        }
    }
?>