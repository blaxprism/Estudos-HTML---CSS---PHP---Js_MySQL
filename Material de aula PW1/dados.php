<?php
include("conexao.php");
$nome=$_POST["nome"];
$tel=$_POST["tel"];
$email=$_POST["email"];


for($i=0;$i<=2;$i++)
{
	if(isset($_POST["$i"]))
	{
		$pet[$i]=$_POST["$i"];
	}
	else
	{
		$pet[$i]=0;
	}
}

$botao=$_POST["botao"];

switch($botao)
{

	case "Enviar":

mysqli_query($conexao,"insert into contato(nome,telefone,email,pet0,pet1,pet2) values ('$nome','$tel','$email','$pet[0]','$pet[1]','$pet[2]')");

	break;

	case "Exibir": 

	$consulta=mysqli_query($conexao,"select * from contato");

echo "<h1> Dados do contato</h1>";
	while($dado=mysqli_fetch_array($consulta))
		
	{

		echo $dado["id_contato"]."<br>";
		echo $dado["nome"]."<br>";
		echo $dado["telefone"]."<br>";
		echo $dado["email"]."<br>";
		echo $dado["pet0"]."<br>";
		echo $dado["pet1"]."<br>";
		echo $dado["pet2"]."<br><br><br>";
	}
	
	break;

	case "Exibir Usuario": 

		$consulta=mysqli_query($conexao,"select * from contato where nome= '$nome'");

echo "<h1> Dados do contato</h1>";
	while($dado=mysqli_fetch_array($consulta))
		
	{

		echo $dado["id_contato"]."<br>";
		echo $dado["nome"]."<br>";
		echo $dado["telefone"]."<br>";
		echo $dado["email"]."<br>";
		echo $dado["pet0"]."<br>";
		echo $dado["pet1"]."<br>";
		echo $dado["pet2"]."<br><br><br>";
	}


}
?>