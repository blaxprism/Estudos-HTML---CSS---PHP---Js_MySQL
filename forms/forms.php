<!DOCTYPE html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/forms.css"/>
		<link rel="icon" href="imagens/logo.png">
		<title>Formulários</title>
		<!--script em javascript que faz aparecer algo na tela como um alerta-->
		<script type="text/javascript">
			function msg() {
				alert("🎆Você apertou o botão🎆");

			}
		</script>
	</head>
	<body>
			<?php
			$texto=$_POST['texto'];
			$max=$_POST['max'];
			$senha=$_POST['senha'];
			$num=$_POST['num'];
			$pergunta=$_POST['pergunta'];
			/*isso é uma array eu acho, tenho que rever a explicação do video original saber, quando eu estudar array eu tento mexer nisso
				$opc[]=$_POST['opc[]'];
				$opc[1]=$_POST['opc[1]'];
				$opc[2]=$_POST['opc[2]'];
				$opc[3]=$_POST['opc[3]'];
				$opc[4]=$_POST['opc[4]'];
			*/
			$escondido=$_POST['escondido'];
			//$arquivo=$_POST['arquivo'];
			$algo=$_POST['algo'];
			$casado=$_POST['casado'];
			$lorem=$_POST['lorem'];
			$digita=$_POST['digita'];

			echo "<hr/>$texto <hr/>";
			echo "$max<hr/>";
			echo "$senha<hr/>";
			echo "$num<hr/>";
			echo "$pergunta<hr/>";
			//echo "$opc<hr/>";
			echo "$escondido<hr/>";
			//echo "$aperta<hr/>";
			//echo "$arquivo<hr/>";
			echo "$algo<hr/>";
			echo "$casado<hr/>";
			echo "$lorem<hr/>";
			echo "$digita<hr/>";



			?>
	</body>
