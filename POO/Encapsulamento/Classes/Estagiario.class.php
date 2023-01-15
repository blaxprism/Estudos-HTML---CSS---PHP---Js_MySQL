<?php
class Estagiario extends Funcionario
{
	public $Salario;
	//Método GetSalario Sobreescrito
	//Retorna o salário com 12% de Bônus
	function GetSalario()
	{
		return $this->Salario * 1.12;
	}
}

?>