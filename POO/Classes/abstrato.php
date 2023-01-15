<?php
//incluir as classes
include_once 'Classes/Pessoa.class.php';
include_once 'Classes/Conta.class.php';
include_once 'Classes/ContaPoupanca.class.php';

$carlos = new Pessoa(10,"Carlos da Silva", 1.85, 25, "10/04/1986", "Ensino médio", 650.00);
$conta = new ContaPoupanca(6678, "PP.1234.57", "10/07/02", $carlos, 9876, 500.00, '10/07');
?>