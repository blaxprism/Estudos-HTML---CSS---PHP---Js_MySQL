<?php
	class Aplicacao 
	{
		static $Quantidade;

		//Método Construtor
		//incrementa a quantidade de aplicações
		function __construct($Nome)
		{
			//incrementa propriedade estática
			self::$Quantidade ++;
			$i = self::$Quantidade;
			echo "Nova aplicação nr. $i: $Nome<br/>";
		}
	}
	//Cria novos objetos
	new Aplicacao('Dia');
	new Aplicacao('Gimp');
	new Aplicacao('Gnumeric');
	new Aplicacao('Abiword');
	new Aplicacao('Evolution');

	echo 'A quantidade de aplicações = ' . Aplicacao::$Quantidade . "<br/>";
?>