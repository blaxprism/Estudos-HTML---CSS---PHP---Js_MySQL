<?php
$n1=$_POST["n1"];
$n2=$_POST["n2"];
$acao=$_POST["acao"];
echo $n1. $acao . $n2. "<br/>";
switch($acao) 

{

	case "Soma": echo "O resultado é ",$n1+$n2 ;
	break;
	case "Div": echo "O resultado é ", $n1/$n2;
	break;
	case "Mult": echo "O resultado é ", $n1*$n2;
	break;
	

	
}













?>