
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post" action="nome.php">
			<h1>Formulario</h1>
			<h2>Nome:</h2>
			<input type="text" name="nome"><br><br>
			<h2>Numero1:</h2>
			<input type="text" name="n1"><br><br>
			<h2>Numero2:</h2>
			<input type="text" name="n2"><br><br>
			
			<input type="submit" value="Enviar">
		</form>

	</body>
</html>
<?php
@$nome=$_POST["nome"];
@$n1=$_POST["n1"];
@$n2=$_POST["n2"];

$soma=$n1+$n2;

echo "A soma de $nome é $soma";


?>