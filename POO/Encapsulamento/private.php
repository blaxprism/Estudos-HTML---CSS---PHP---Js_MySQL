<?php
# Carrega a classe
include_once 'classes/Funcionario.class.php';

# Instancia um novo funcionário
$pedro = new Funcionario;

# Atribui novo Salário 
$pedro->SetSalario(876);

# Obtem o salário
echo 'Salario: (R$) ' . $pedro->GetSalario();

?>