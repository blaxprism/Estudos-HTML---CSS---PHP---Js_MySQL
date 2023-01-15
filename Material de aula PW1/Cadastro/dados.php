<?php
$login=$_POST["login"];
$senha=$_POST["senha"];



if(empty($login) or empty($senha))
{
	echo "Preencha todos os campos<br>
		<a href='formulario.php'>Voltar</a>";
}

else
{
	if(strlen($senha)<5)
	{
		echo "A senha contém menos de 5 caracteres
		<a href='formulario.php'>Voltar</a>";
	}
	else
	{
		if(strpos($login,"@")=="")
		{
			echo "Email Inválido";
		}

		else
		{
			echo "Email cadastrado com sucesso";
		}
	
	}


}









?>