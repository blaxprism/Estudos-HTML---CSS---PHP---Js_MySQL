<?php
abstract class Conta
{
	var $Agencia;
	var $Codigo;
	var $DataDeCriacao;
	var $Titular;
	var $Senha;
	var $Saldo;
	var $Cancelada;


	/* Método Retirar
	 * Diminui o Saldo em $quantia
	 */
	function Retirar($quantia)
	{
		if ($quantia > 0) {
			$this->Saldo -= $quantia;
		}
	}

	/* Método Retirar
	 * Aumenta o Saldo em $quantia
	 */
	function Depositar($quantia)
	{
		if ($quantia > 0) {
			$this->Saldo += $quantia;
		}
	}

	/* Método ObterSaldo
	 * retorna o Saldo atual
	 */
	function ObterSaldo()
	{
		return $this->Saldo;
	}

	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
	{
		$this->Agencia = $Agencia;
		$this->Codigo = $Codigo;
		$this->DataDeCriacao = $DataDeCriacao;
		$this->Titular = $Titular;
		$this->Senha = $Senha;

		//Chamada a outro método da classe
		$this->Depositar($Saldo);
		$this->Cancelada = false;
	}

	//Método destrutor
	//finaliza o objeto
	function __destruct()
	{
		echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} finalizada...<br/>";
	}

	abstract function Transferir($Conta, $Valor);
}
?>