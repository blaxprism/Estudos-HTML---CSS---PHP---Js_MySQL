<?php
	class Aplicacao
	{
		//Método estático
		//lê o arquivo readme.txt
		static function Sobre()
		{
			$fd = fopen('readme.txt', 'r');
			while($linha = fgets($fd, 200))
			{
				echo $linha;
			}
		}
	}
	echo "Informações sobre a aplicação:<br/>";
	echo "=====================================================<br/>";
	Aplicacao::Sobre();
?>