<?php

$nome=$_POST["nome"];
$nota1=$_POST["n1"];
$nota2=$_POST["n2"];

$media=($nota1+$nota2)/2;

/*

== - igualdade
=== - identico
>= - maior igual
<= - igual
!= - diferente
!== - nao identico
! - negação

and && - e
or || - ou

*/




if($media>5)
	{
		echo "Aprovado com média $media";
	}
elseif($media<=5 and $media>=4)
	{
		echo "Recuperação com $media";
	}

else
	{
		echo "Reprovado com média $media";
	}








?>