<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<title>Espelhos</title>
		<link rel="icon" href="espelho.png"/>
		<style type='text/css'>
			body{
				font-family: verdana;
				background: rgb(168,153,142);
				background: linear-gradient(90deg, rgba(168,153,142,1) 0%, rgba(173,155,142,1) 25%, rgba(175,153,139,1) 100%);
				color: black;
				font-weight: bolder;
			}
			hr{
				border-color: black;
			}
			fieldset{
				border-color: black;
			}
			#img{
				font-family: verdana;
			}
			pre{
				font-family: verdana;
				color: black;
				font-weight: bolder;			
			}
		</style>
	</head>
	<body>			
		<form method="post" action="exibir.php"> 
			<fieldset>
				<legend>Insira os valores</legend>
				<?php
				@$tipo=$_POST['tipo'];
				switch ($tipo) {
					case '1':
						echo "<label for='num2'>Digite a posição do objeto</label><br/>
						<input required type='number' min='0.001' step='any' name='num2' id='num2'/>
						<hr color='#2e0f00'/>
						<label for='num3'>Digite a posição da imagem</label><br/>
						<input required type='number' min='0.001' step='any' name='num3' id='num3'/>
						<hr color='#2e0f00'/>
						<br/>

						<fieldset class='img'>
							<legend>A imagem é Real ou virtual?</legend>
							<pre><input type='radio' value='1' name='img' id='A' required/><label for='A'>Real(positiva)</label></pre>
							<pre><input type='radio' value='2' name='img' id='B'/><label for='B'>virtual(negativa)</label></pre>
							<hr color='#2e0f00'/>
							<input type='image' src='enviar.png' alt='enviar' min'1' border='2' height='100' id='imagem'/>
						</fieldset>";
						break;
					
					case 2:
						echo"<label for='num1'>Digite a distancia focal</label><br/>
						<input required type='number' min='0.001' step='any' min'1' name='num1' id='num1'/>
						<hr color='#2e0f00'/>
						<label for='num3'>Digite a posição da imagem</label><br/>
						<input required type='number' min='0.001' step='any' min'1' name='num3' id='num3'/>
						<hr color='#2e0f00'/>
						<br/>
						<fieldset class='img'>
							<legend>A imagem é Real ou virtual?</legend>
							<pre><input type='radio' value='1' name='img' id='A' required/><label for='A'>Real(positiva)</label></pre>
							<pre><input type='radio' value='2' name='img' id='B'/><label for='B'>virtual(negativa)</label></pre>
							<input type='image' src='enviar.png' alt='enviar' min'1' border='2' height='100' id='imagem'/>
						</fieldset>
						";

						break;

					case 3:
						echo "<label for='num1'>Digite a distancia focal</label><br/>
						<input required type='number' min='0.001' step='any' min'1' name='num1' id='num1'/>
						<hr color='#2e0f00'/>
						<label for='num2'>Digite a posição do objeto</label><br/>
						<input required type='number' min='0.001' step='any' min'1' name='num2' id='num2'/>
						<hr color='#2e0f00'/>
						
						<input type='image' src='enviar.png' alt='enviar' min'1' border='2' height='100' id='imagem'/>
						";
						break;
						
				}
				?>
			</fieldset>
		</form>
				

	</body>
</html>