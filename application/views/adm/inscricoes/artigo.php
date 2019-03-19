<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	foreach($INSCRITO as $i) {
		echo '<div id="cabecalho">';		
			echo '<b>Nome: </b>';
			echo $i->NOME;
			echo '<br><b>E-mail: </b>';
			echo $i->EMAIL;
			echo '<br><b>GT: </b>';
			echo $i->NOME_EVENTO;
		echo '</div>';
		echo '<div id="artigo" style="white-space: pre-line;">';
			echo '<br><b>Título do artigo: </b>';
			echo $i->TITULO;
			echo '<br><b>Artigo: </b><br>';
			echo $i->ARTIGO;
		echo '</div>';
		echo '<br><div id="botoes">';
			echo anchor('adm/inscricao/deferir_apresentador/'.$i->idINSCRITO, "Deferir", array('class'=>"btn btn-success", 'id'=>"botao"));
			echo anchor('adm/inscricao/indeferir_apresentador/'.$i->idINSCRITO, "Indeferir", array('class'=>"btn btn-danger", 'id'=>"botao"));
		echo '</div>';
		
	}



?>


