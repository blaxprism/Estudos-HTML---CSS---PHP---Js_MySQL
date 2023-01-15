<?php
	#Carrega as classes
	include 'classes/Funcionario.class.php';
	include 'classes/Estagiario.class.php';

	#Cria objeto Funcionario
	$pedrinho = new Funcionario;
	$pedrinho->nome = 'Pedrinho';

	#Cria objeto Estagiario
	$mariana = new Estagiario;
	$mariana->nome = 'Mariana';

	#Imprime propriedade Nome
	echo $pedrinho->nome . "\n";
	echo $mariana->nome;
?>