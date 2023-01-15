<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="dados.php">
		<label>Nome: </label><br>
		<input type="text" name="nome" placeholder="insira seu nome"><br><br>
		<label>Telefone: </label><br>
		<input type="text" name="tel" placeholder="insira seu numero"><br><br>
		<label>Email: </label><br>
		<input type="text" name="email" placeholder="insira seu Email"><br><br>
		<label>Quais são os seus Pets: </label><br>
		<input type="checkbox" name="0" value="cachorro"> Cachorro<br>
		Qtde <input type="text" name="qpet1" style="max-width:30px" ><br><br>
		<input type="checkbox" name="1" value="gato"> Gato
		<input type="checkbox" name="2" value="coelho"> Coelho<br><br>
		<input type="submit" name="botao" value="Enviar">
		<input type="submit" name="botao" value="Exibir">
		<input type="submit" name="botao" value="Exibir Usuario">
	</form>

</body>
</html>