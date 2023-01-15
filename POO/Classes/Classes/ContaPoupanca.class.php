<?php
class ContaPoupanca extends Conta
{
	
	var $Aniversario;
	//Método construtor (sobreescrito)
	//Agora também inicializa a variável aniversário
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
	{
		//Chamada do método construtor da classe-pai
		parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
		$this->Aniversário = $Aniversario;
	}

	//Método Retirar (Sobreescrito)
	//Verifica se há saldo para Retirar tal $quantia
	function Retirar($quantia)
	{
		if ($this->Saldo >= $quantia) {
			//executa o método da classe-pai.
			parent::Retirar($quantia);
		}else{
			echo "Retirada não permitida";
			return false;
		}
		//retirada permitica
		return true;
	}
	function Transferir($Conta,$Valor){
		if ($this->Retirar($Valor)) 
		{
			$conta->Depositar($Valor);
		}
	}
}
?>