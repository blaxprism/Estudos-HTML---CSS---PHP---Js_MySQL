<?php
class Funcionario 
{
	private 	$Codigo;
	public 		$Nome;
	private 	$Nascimento;
	protected	$Salario;

	// Método SetSalario()
	// Atribuí o parametro $Salario à Propriedade $Salario
	function SetSalario($Salario)
	{
		//Verifica se o Número é Positivo
		//isnumeric() verifica se é um valor numérico
		if (is_numeric($Salario) and ($Salario>0)) {
			$this->Salario = $Salario;
		}
	}

	// Método GetSalario()
	// Retorna o valor da propriedade $Salario
	function GetSalario()
	{
		return $this->Salario;
	}
}
?>