<?php
	//inclui as classes
	include_once 'Classes/Produto.class.php';
	include_once 'Classes/Fornecedor.class.php';

	//Instancia Fornecedor
	$fornecedor = new Fornecedor;
	$fornecedor->Codigo		=	848;
	$fornecedor->RazaoSocial= 	'Bom Gosto Alimentos S.A.';
	$fornecedor->Endereco	=	'Rua Ipiranga';
	$fornecedor->Cidade 	=	'Poços de Caldas';

	//Instancia Produto
	$produto = new Produto;
	$produto->Codigo 	= 462;
	$produto->Descricao	= 'Doce de Pêssego';
	$produto->Preco 	= 1.24;
	$produto->Fornecedor= $fornecedor;

	//Imprime atributos
	echo "Código	:"	.	$produto->Codigo . "<br/>";
	echo "Descriçao :"	.	$produto->Descricao . "<br/>";
	echo "Código	:"	.	$produto->Fornecedor->Codigo . "<br/>";
	echo "Razão Social 	:"	.	$produto->Fornecedor->RazaoSocial . "<br/>";

?>