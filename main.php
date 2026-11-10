<?php
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$funcionarioCLT = new FuncionarioCLT("João Silva","123.456.789-00","Professor",3000.00, 240.00,"10","200","30 dias");

$funcionarioPJ = new FuncionarioPJ("Maria Souza","987.654.321-11","Desenvolvedora",0.00,"12.345.678/0001-90",5000.00,"Desenvolvimento Web");


$funcionarioCLT->mostrarDados();
$funcionarioCLT->mostrarPagamento();

$funcionarioPJ->mostrarDados();
$funcionarioPJ->mostrarPagamento();
echo "\n";
?>