
<?php 
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

//Criando os funcionários
$f[0] = new FuncionarioCLT("João", "12345678900", "Professor", 3000, 300, "200", "Vale alimentação", "30 dias");

$f[1] = new FuncionarioPJ("Maria", "98765432100", "Programadora", 4000, "12345678000100", 5000, "Desenvolvimento de sistemas");

//Percorrendo o vetor e mostrando as informações
foreach ($f as $funcionario){
    $funcionario->mostrarDados();

    $funcionario->mostrarPagamento();

    echo "\n";
    echo "\n";
}

?>
