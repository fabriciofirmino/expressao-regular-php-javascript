<?php


if(isset($_POST["expressao"])){

	$dados = addslashes($_POST['expressao']);

	if (preg_match('/^[a-zA-Z]{1}[a-zA-Z]*([a-zA-Z]*|\d*)*$/', $dados)) { //Identificador
		echo("IDENTIFICADOR!");
		return;
	}

	elseif (preg_match('/^[\+-]?\d*?$/', $dados)) {  //Inteiro
		echo("NÚMERO INTEIRO!");
		return;

	}

	elseif (preg_match('/^[\+-]?(\d*\.?\d{0}?){3}$/', $dados)) {  //Decimal:
		echo("NÚMERO REAL!");
		return;
	}
	else{
		echo ("NÃO IDENTIFICADO");
	}


}


?>