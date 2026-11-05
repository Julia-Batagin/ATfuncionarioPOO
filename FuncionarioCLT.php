<?php 
require_once 'Funcionario.php';
//Criando a classe Funcionario CLT
class FuncionarioCLT extends Funcionario{
    //Atributos
    private float $fgts;
    private string $descontos;
    private string $beneficios;
    private string $ferias;

    //Métodos
    public function __construct(string $nome, string $cpf, string $cargo, float $salario, float $fgts, string $descontos, string $beneficios, string $ferias)
    {
        parent::__construct($nome, $cpf, $cargo, $salario);
        $this->fgts = $fgts;
        $this->descontos = $descontos;
        $this->beneficios = $beneficios;
        $this->ferias = $ferias;
    }

     public function mostrarDados(){
        parent::mostrarDados();
        echo "FGTS: R$ " . $this->fgts . "\n";
        echo "Descontos: " . $this->descontos . "\n";
        echo "Benefícios: " . $this->beneficios . "\n";
        echo "Férias: " . $this->ferias . "\n";
    }

    protected function calcularPagamento(){
        return $this->salario;
}
}

?>