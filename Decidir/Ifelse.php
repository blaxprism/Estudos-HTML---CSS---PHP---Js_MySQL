<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Decida</title>
	</head>
	<body bgcolor="black">
		<font face="verdana" color="white">
			<?php
				$num=$_POST['num'];
				
				if ($num>100) {
					echo "Você já passou dos 100, ta véio";
				}elseif ($num>89 && $num<101) {
					echo "Você está entre os 90 e 100 anos, ta véio";
				}elseif ($num>79 && $num<90) {
					echo "Você está na faixa dos 80 anos, ta guerreiro";
				}elseif ($num>69 && $num<80) {
					echo "Você está na faixa dos 70 anos, ta guerreirinho";
				}elseif ($num>59 && $num<70) {
					echo "Você ta na faixa dos 60 anos, ta ficando velho";
				}elseif ($num>49 && $num<60) {
					echo "Você ta na faixa dos 50 anos, ta na flor da idade";
				}elseif ($num>29 && $num<50) {
					echo "Você está na fase adulta, entre 30 e 49 anos";
				}elseif($num>17 && $num<30){
					echo "Você é um jovem-adulto, está na faixa de 18-29 anos";
				}else{
					echo"Você é um adolescente, criança ou um bebê, pois tem menos de 18 anos";
				}

			?>
		</font>
	</body>
</html>