<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	foreach($INSCRITO as $i) {
		echo '<b>Nome: </b>';
		echo $i->NOME;
		if ($i->NECESSIDADES == 1)
			echo '<br><div id="necessidade" style="color: blue;">PORTADOR DE NECESSIDADES ESPECIAIS</div>';
		echo '<br><b>E-mail: </b>';
		echo $i->EMAIL;
		echo '<br><b>GT: </b>';
		echo $i->NOME_EVENTO;
		echo '<br><b>Título do artigo: </b>';
		echo $i->TITULO;
		echo '<br><b>Situação: </b>';
		
		if ($i->SITUACAO == 0) {
			echo "<div id='insc' style='color: green;'><b>";
			echo "PAGO";
			echo "</b></div>";
			echo anchor("adm/inscricao/exibir_artigo/".$i->idINSCRITO, "Ver artigo", array('class'=>"btn btn-primary", 'id'=>"botao"));		
			echo anchor("adm/inscricao/indeferir_apresentador/".$i->idINSCRITO, "Indeferir", array('class'=>"btn btn-danger", 'id'=>"botao"));		
			echo "<br>";
		} else if ($i->SITUACAO == 1) {
			echo "<div id='insc' style='color: red;'><b>";
			echo "INDEFERIDO/LIMITE ATINGIDO";
			echo "</b></div>";
			echo anchor("adm/inscricao/exibir_artigo/".$i->idINSCRITO, "Ver artigo", array('class'=>"btn btn-primary", 'id'=>"botao"));		
			echo anchor("adm/inscricao/deferir_apresentador/".$i->idINSCRITO, "Deferir", array('class'=>"btn btn-success", 'id'=>"botao"));		
			echo "<br>";
		} else if ($i->SITUACAO == 2) {
			echo "<div id='insc' style='color: orange;'><b>";
			echo "PAGAMENTO PENDENTE";
			echo "</b></div>";
			echo anchor("adm/inscricao/exibir_artigo/".$i->idINSCRITO, "Ver artigo", array('class'=>"btn btn-primary", 'id'=>"botao"));		
			echo anchor("adm/inscricao/pag_apresentador/".$i->idINSCRITO, "Confirmar pagamento", array('class'=>"btn btn-success", 'id'=>"botao"));		
			echo "<br>";		
		} else if ($i->SITUACAO == 3) {
			echo "<div id='insc' style='color: blue;'><b>";
			echo "AGUARDANDO AVALIAÇÃO";
			echo "</b></div>";
			echo anchor("adm/inscricao/exibir_artigo/".$i->idINSCRITO, "Ver artigo", array('class'=>"btn btn-primary", 'id'=>"botao"));		
			echo anchor("adm/inscricao/deferir_apresentador/".$i->idINSCRITO, "Deferir", array('class'=>"btn btn-success", 'id'=>"botao"));		
			echo anchor("adm/inscricao/indeferir_apresentador/".$i->idINSCRITO, "Indeferir", array('class'=>"btn btn-danger", 'id'=>"botao"));		
			echo "<br>";		
		}
		
		echo "<br>";
	}



?>

