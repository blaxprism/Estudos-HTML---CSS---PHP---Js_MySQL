<?php
class Pessoa
{
	var $Codigo;
	var $Nome;
	var $Altura;
	var $Idade;
	var $Nascimento;
	var $Escolaridade;
	var $Salario;

	//Método Crescer
	//altera a altura em Cm
	function Crescer($centimetros)
	{
		if ($centrimetros>0) 
		{
			$this->Altura += $centimetros;
		}
	}

	//Método Formar
	//altera a Escolatidade para $titulação
	function Formar($titulacao)
	{
		$this->Escolaridade = $titulacao;
	}

	//Método envelhecer
	//altera a idade em $anos
	function Envelhecer($anos)
	{
		$this->Idade += $anos;
	}
	//Método construtor
	//inicializa propriedades
	function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
	{
		$this->Codigo = $Codigo;
		$this->Nome = $Nome;
		$this->Altura = $Altura;
		$this->Idade = $Idade;
		$this->Nascimento = $Nascimento;
		$this->Escolaridade = $Escolaridade;
		$this->Salario = $Salario;

	}

	function __destruct()
	{
		echo "Objeto {$this->Nome} finalizado...<br/>";
	}
}
?>