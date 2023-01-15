<?php
class ContaCorrente extends Conta
{
	
	var $Limite;
	//Método construtor (sobreescrito)
	//Agora também inicializa a variável Limite
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
	{
		//Chamada do método construtor da classe-pai
		parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
		$this->Aniversário = $Limite;
	}

	//Método Retirar (Sobreescrito)
	//Verifica se a quantidade retirada está dentro do limite
	function Retirar($quantia)
	{
		//imposto sobre movimentação financeira
		$cpmf = 0.05;
		if (($this->Saldo+$this->Limite) >= $quantia) {
			//executa o método da classe-pai.
			parent::Retirar($quantia);

			//Debita o imposto
			parent::Retirar($quantia * $cpmf);
		}else{
			echo "Retirada não permitida";
			return false;
		}
		//retirada permitida
		return true;
	}
}
?>