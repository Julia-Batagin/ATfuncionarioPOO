<?php 
require_once 'Funcionario.php';

// Criando a classe Funcionario PJ
class FuncionarioPJ extends Funcionario {
    // Atributos
    private string $cnpj;
    private float $valorContrato;
    private string $prestacaoServicos;

    // Métodos
    public function __construct(string $nome, string $cpf, string $cargo, float $salario, string $cnpj, float $valorContrato, string $prestacaoServicos)
    {
        parent::__construct($nome, $cpf, $cargo, $salario);
        $this->cnpj = $cnpj;
        $this->valorContrato = $valorContrato;
        $this->prestacaoServicos = $prestacaoServicos;
    }

    // Mostrando os dados do funcionário PJ
    public function mostrarDados(){
        parent::mostrarDados();

        echo "CNPJ: " . $this->cnpj . "\n";
        echo "Valor do contrato: R$ " . $this->valorContrato . "\n";
        echo "Prestação de serviços: " . $this->prestacaoServicos . "\n";
    }

    // Sobrescrevendo o método calcularPagamento
    #[Override]
    public function calcularPagamento()
    {
        // Cálculo do valor líquido considerando o valor do contrato
        $liquido = $this->valorContrato;

        return "
CNPJ: {$this->cnpj}
Prestação de Serviços: {$this->prestacaoServicos}
Valor do Contrato R$: {$this->valorContrato}
Total Líquido R$: {$liquido}";
    }
}
?>