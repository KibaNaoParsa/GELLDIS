<div class="modal fade" id="modal_inscricaosill" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">INSCRIÇÃO</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">       
                    
                    	<h1>blablabla</h1>               
                    	<?php/*
								echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
								Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. 
								Quam nulla porttitor massa id. 
								Praesent elementum facilisis leo vel fringilla. 
								Semper viverra nam libero justo. 
								Bibendum arcu vitae elementum curabitur vitae nunc sed velit dignissim. 
								Et odio pellentesque diam volutpat commodo sed egestas egestas. 
								Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. 
								Ultricies tristique nulla aliquet enim tortor. 
								Velit scelerisque in dictum non consectetur a erat nam at. 
								Condimentum mattis pellentesque id nibh tortor. 
								Ac turpis egestas maecenas pharetra convallis posuere morbi leo urna. 
								Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. 
								Non pulvinar neque laoreet suspendisse. 
								Ipsum suspendisse ultrices gravida dictum fusce ut. 
								Vitae congue eu consequat ac felis. 
								Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. 
								Tincidunt praesent semper feugiat nibh sed pulvinar proin gravida hendrerit. 
								Pulvinar etiam non quam lacus suspendisse faucibus interdum.';
								
								br().br();
								$atributos = array('name'=>'formulario_login', 'id'=>'formulario_login');
								echo form_open('inicio', $atributos).								
								form_label("Nome: ", "txt_nome").
								form_input('txt_nome').br().
								form_label("Instituição: ", "txt_instituicao").
								form_input('txt_instituicao').br().
								form_label("CPF: ", "txt_cpf").
								form_input('txt_cpf').br().
								form_label("E-mail: ", "txt_email").
								form_input('txt_email').br().br().
								
								"<div id='radio' style='float: left;'><b>"."Você deseja participar como:"."</b>".br().
								form_radio("tipo[]", 0, FALSE).
                        form_label("Ouvinte ", "txt_li").br().
                        form_radio("tipo[]", 1, FALSE).
                        form_label("Apresentador ", "txt_li").br()."</div>".br().
								"<div id='evento' style='float: left;'><b>"."De qual evento você deseja participar:"."</b>".br();
								
								foreach($EVENTO as $e) {
									echo form_radio("evento[]", $e->idEVENTO, FALSE).
                        	form_label($e->NOME, "txt_li2").br();
								}
								echo "</div>";

								echo form_submit("btn_enviar", "Entrar", "login loginmodal-submit").form_close();					
							




											/*											
											echo '<div class="modal fade show in">
  <div class="modal-dialog">
    <div class="v-cell">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">'.
        $NOME.', insira os detalhes de seu projeto.'.br();
								
								$atributos = array('name'=>'formulario_login', 'id'=>'formulario_login');
								$btn = array('name'=>'btn_cadastrar', 'id'=>'botao1', 'class'=>'btn btn-warning');								
								echo form_open('login/inscricao_trabalho', $atributos).								
								form_hidden('nome', $NOME).								
								form_hidden('CPF', $CPF).
								form_hidden('instituicao', $INSTITUICAO).
								form_hidden('email', $EMAIL).
								form_hidden('idEVENTO', $idEVENTO).	
																
								"<b>".form_label("Título do projeto: ", "txt_titulo")."</b>".
								form_input('txt_titulo').br().
								"<b>".form_label("Artigo: ", "txt_artigo")."</b>".br().
								form_textarea('txt_artigo').br();
																
								echo form_submit("btn_enviar", "Cadastrar", $btn).form_close().'
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>';
																		
		
									
							*/

?>
                    </div>
                </div>
            </div>
        </div>