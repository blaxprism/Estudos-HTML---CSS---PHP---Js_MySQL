<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

		#caixaform
		{
			width: 250px;
			height: 250px;
			background-image:linear-gradient(#86a1a9,cyan,pink,yellow);
			border-radius: 20%;
			text-align: center;
			margin:auto;
			line-height: 20px;

		}

		#formulario
		{
			position: absolute;
			margin:50px 44px;
		}

		
	</style>
</head>
<body>
	<div id="caixaform">
	<form method="POST" action="dados.php" id="formulario">
		<label>Login</label><br>
		<input type="text" name="login"><br><br>
		<label>Senha</label><br>
		<input type="password" name="senha"><br><br>
		<input type="submit" value="Enviar"><br>	

	</form>
	</div>

</body>
</html>