<?php
$nota1=$_POST["n1"];
$nota2=$_POST["n2"];
/*
Operadores Lógicos e Comparativos
== - igualdade
=== - idêntico
!= - diferente
!== - não identico
!- negação
>= maior ou igualdade
<= menor ou igualdade
> maior
< menor
And  && - E
or || - ou
*/
$media=($nota1+$nota2)/2;
//acima de 5 aprovado,5 recuperação,abaixo- estude mais
if($nota1==2 || $nota2==5)	
		echo "Aprovado";
else
		echo "Reprovado";
?>