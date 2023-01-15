<!DOCTYPE html>
	<html>
		<meta charset="utf-8"/>
		<head>
			<title>If else</title>
		</head>
		<body BGCOLOR="black">
			<FONT FACE="arial" color="white">
				
					<?php
						$num=$_POST["numero"];
						//if
						if (is_numeric($num)) {
							if ($num>0) {
							echo "$num é positivo";
							//elseif
							}elseif ($num==0) {
								echo "$num é neutro";
							//else
							}else{
								echo "$num é negativo";
							}	
						}else{
							echo "Digite um valor válido";
						}
						
					?>

			</FONT>
		</body>
	</html>