<?php
#Carrega as classes
include 'classes/Funcionario.class.php';
include 'classes/Estagiario.class.php';

$pedrinho = new Estagiario;
$pedrinho->SetSalario(248);
echo 'O salário do pedrinho é R$: ' . $pedrinho->GetSalario();
?>