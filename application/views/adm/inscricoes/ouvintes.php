<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	foreach($INSCRITO as $i) {
		echo '<b>Nome: </b>';
		echo $i->NOME;
		echo '<br><b>E-mail: </b>';
		echo $i->EMAIL;
		echo '<br><b>GT: </b>';
		echo $i->NOME_EVENTO;
		
		
		
		
		/*
		echo "<b>Nome: </b>".$i->NOME.br().
			  "<b>E-mail: </b>".$i->EMAIL.br().
			  "<b>GT: </b>".$i->NOME_EVENTO.br();
		 
		if ($i->SITUACAO == 0) {
			echo "<b>Situação: </b><div id='pag' style='color: green;'>PAGO</div>";		
		} else if ($SITUACAO == 2) {
			echo "<b>Situação: </b><div id='pag' style='color: yellow;'>Pagamento pendente</div>";		
		}
		*/	
		
	}



?>
