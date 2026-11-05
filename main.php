<?php
require_once 'FuncionarioCLT.php';
require_once 'FuncionarioPJ.php';

$clt = new FuncionarioCLT("João", "12345678900", "Professor", 3000, "300", "200", "Vale alimentação", "30 dias");

$pj = new FuncionarioPJ("Maria", "98765432100", "Programadora", 4000, "12345678000100", 5000, "Desenvolvimento de sistemas");

$clt->mostrarPagamento();

$pj->mostrarPagamento();

?>