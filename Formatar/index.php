<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>lorem ipsum</title>
		<?php  
			@$fundo=$_POST['fundo'];
			@$cor=$_POST['cor'];
			echo"<style type='text/css'>
				body{
					background-color: $fundo;
					color: $cor;
				}
				input{
					border-color: blue;
				}

			</style>";
		?>
		<link rel="icon" href="https://static-cdn.jtvnw.net/emoticons/v2/304038318/static/light/3.0"/>
	</head>
	<body>
		<b>
			<?php
			@$fonte=$_POST['fonte'];
			echo "<font face='$fonte'>";
			?>
				
				<form method="post" name="formato" target="index.php">
					<label for="cor">Defina a cor da fonte utilizada na página:</label><br/>
					<input type="text" name="cor" id="cor"/>
					<br/><br/>
					<label for="fundo">Defina a cor de fundo utilizada na página:</label><br/>
					<input type="text" name="fundo" id="fundo"/>
					<br/><br/>
					<label for="fonte">Defina a fonte utilizada na página:</label><br/>
					<input type="text" name="fonte" id="fonte"/>
					<br/><br/>
					<input type="submit" name="enviar"/>
				</form> 
			</font>
		</b>
	</body>
</html>