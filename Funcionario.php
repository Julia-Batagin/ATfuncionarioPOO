<?php 
//Criando a classe Funcionario
abstract class Funcionario{
    //Atributos
    protected string $nome;
    protected string $cpf;
    protected string $cargo;
    protected float $salario;

    //Métodos
    public function __construct(string $nome, string $cpf, string $cargo, float $salario){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
    public function mostrarPagamento(){
    echo "Pagamento: R$ " . $this->calcularPagamento();
}

abstract protected function calcularPagamento();
}

?>