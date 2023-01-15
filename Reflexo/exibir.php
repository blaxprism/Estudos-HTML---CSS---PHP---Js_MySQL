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
				border-color:black;
			}
			fieldset{
				border-color: black;
			}
			#resul{
			
			}
		</style>
	</head>
	<body>			
		<div id="resul">
			<?php  
				@$num1=$_POST['num1'];
				@$num2=$_POST['num2'];
				@$num3=$_POST['num3'];
				@$img=$_POST['img'];
				if (empty($num1)){
					if ($img==1) {
						$p1=$num2*$num3;
						$p2=$p1/($num2+$num3);
										
					}else{
						$p1=$num2*$num3;
						$p2=$p1/($num2-$num3);
							
					}
					echo "A distância focal é aproximadamente: ". $p2."cm.<br/>";	

				}elseif (empty($num2)) {
					if ($img==1) {
						$n1=-1*(1/((1/$num3)-(1/$num1)));
					}else{
						$n1=-1*(1/((1/$num3)-(1/$num1)));
						$n1=$n1*(-1);
					}
					
					echo "A distância da posição do objeto é aproximadamente: ".$n1."cm.<br/>";
				}elseif(empty($num3)){
					$n1=-1*(1/((1/$num2)-(1/$num1)));
					$n2= ceil($n1);
					echo "A distância da posição do objeto(caso real) é aproximadamente: ".$n2."cm.<br/>";
					$n1=-1*(1/((1/$num2)+(1/$num1)));
					$n1=$n1*(-1);
					echo "A distância da posição do objeto(caso virtual) é aproximadamente: ".$n1."cm.<br/>";
				}
			?>
		</div>
	</body>
</html>