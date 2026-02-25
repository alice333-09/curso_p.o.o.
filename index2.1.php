<?php 
    class Funcionario {
        protected string $nome;
        protected float $salarioBase;

        public function __construct($nome,$salarioBase){
            $this->nome = $nome;
            $this->salarioBase = $salarioBase;
        }
        public function getNome(): string {
            return $this->nome;
        }
        public function calcularSalario(): float {
            return $this->salarioBase;
        }
    }
    class Gerente extends Funcionario {
        private float $bonus;

        public function __construct($nome,$salarioBase,$bonus){
            parent::__construct($nome,$salarioBase);
            $this->bonus = $bonus;
        }
        public function calcularSalario(): float {
            return $this->salarioBase + $this->bonus;
        }
    }
    class Estagiario extends funcionario {
        private float $auxilioTransporte;

        public function __construct($nome,$salarioBase,$auxilioTransporte){
            parent::__construct($nome,$salarioBase);
            $this->auxilioTransporte = $auxilioTransporte;
        }
        public function calcularSalario(): float {
            return $this->salarioBase  + $this->auxilioTransporte;
        }
    }
?>