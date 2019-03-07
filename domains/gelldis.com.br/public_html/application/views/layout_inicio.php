<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sistema para visibilidado do grupo de pesquisa GELLDIS do CEFET-MG campus Varginha">
        <meta name="author" content="Alunos" >
        <title>GELLDIS</title>
        <link href="{url}assets/layout_principal/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{url}assets/layout_principal/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="{url}assets/layout_principal/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
        <link href="{url}assets/layout_principal/css/stylish-portfolio.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <a class=" menu-toggle rounded" href="#">
            <i class="fas fa-align-justify fa-3x" style="color: #000"></i>
        </a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="js-scroll-trigger" href="#page-top">Menu</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="{url}blog/eventos/3">Agenda de eventos</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="{url}blog/reunioes/3">Agenda de reuniões</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="{url}blog/noticias/3">Eventos realizados</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="{url}blog/pesquisas">Linhas de pesquisa</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="{url}blog/revista">Revista eletrônica</a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#contact">Contato</a>
                </li>
                <hr/>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" data-toggle="{modal}" href="{url}{link_logado}" data-target="#{modal_link}">Acesso administrativo</a>
                </li>
            </ul>
        </nav>
        <header class="masthead d-flex">            
            <div class="container text-center my-auto">
                <div class="alert alert-{color}" role="alert" style="display: {display};">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <b>{msg}</b>
                </div>
                <img src="{url}assets/layout_principal/logoGelldis.png" class="img-fluid" alt="Responsive image" />		
                <h3 class="mb-5">
                    <em>Grupo de estudos Linguísticos,Literários,<br>Discursivos e Semióticos do CEFET Campus Varginha</em>
                </h3>
                <a class="btn btn-primary btn-xl js-scroll-trigger" data-toggle="modal"  data-target="#modal_about" href="#">Sobre nós</a>
            </div>
            <div class="overlay"></div>
        </header>
		
		<section class="content-section bg-light" id="about">
			<div class="container text-center">
				<div class="row">
					<div class="col-lg-11 mx-auto">
						<h2>SILL</h2>
						<p class="lead mb-5">Simpósio de Língua e Literatura do CEFET MG</p>
          			<a class="btn btn-dark btn-xl js-scroll-trigger" data-toggle="modal"  data-target="#modal_apresentacaosill" href="#">Apresentação</a>
		  			<a class="btn btn-dark btn-xl js-scroll-trigger" data-toggle="modal"  data-target="#modal_programacaosill" href="#">Programação</a>
		  			<a class="btn btn-dark btn-xl js-scroll-trigger" data-toggle="modal"  data-target="#modal_inscricaosill" href="#">Inscrição</a>
		  			<a class="btn btn-dark btn-xl js-scroll-trigger" data-toggle="modal"  data-target="#modal_comissaoorganizadorasill">Comissão organizadora</a>
		 			 <a class="btn btn-dark btn-xl js-scroll-trigger" data-toggle="modal"  data-target="#modal_contatosill">Contatos</a>
        			</div>
      			</div>
    		</div>
	</section>		
		
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container">
                <div class="content-section-heading">
                    <!--<h3 class="text-secondary mb-0">Sites relacionados</h3>-->
                    <h2 class="mb-5">Sites relacionados</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <a href="http://cnpq.br/" target="_blank" style="color:#fff">
                            <span class="service-icon mx-auto mb-3">        
                                <img src="{url}assets/images/cnpq.jpeg" class="img-fluid" alt="Responsive image" style="padding-top: 10%"/>
                            </span>
                            <h4>
                                <strong>                            
                                    Cnpq                            
                                </strong>
                            </h4>
                            <p class="text-faded mb-0">Conselho Nacional de Desenvolvimento Científico e Tecnológico</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <a href="https://www.mec.gov.br/" target="_blank" style="color:#fff">
                            <span class="service-icon mx-auto mb-3">
                                <img src="{url}assets/images/mec.png" class="img-fluid" alt="Responsive image"/>
                            </span>
                            <h4>
                                <strong>MEC</strong>
                            </h4>
                            <p class="text-faded mb-0">Ministério da Educação </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <a href="http://www.fapemig.br/" target="_blank" style="color:#fff">
                            <span class="service-icon rounded-circle mx-auto mb-3">
                                <img src="{url}assets/images/fapemig.png" class="img-fluid" alt="Responsive image" style="padding-top: 10%"/>
                            </span>
                            <h4>
                                <strong>Fapemig</strong>
                            </h4>
                            <p class="text-faded mb-0">Fundação de Amparo à Pesquisa do Estado de Minas Gerais </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="http://www.cefetmg.br/" target="_blank" style="color:#fff">
                            <span class="service-icon rounded-circle mx-auto mb-3">
                                <img src="{url}assets/images/cefet.png" class="img-fluid" alt="Responsive image" style="padding-top: 20%; width: 80%"/>
                            </span>
                            <h4>
                                <strong>CEFET</strong>
                            </h4>
                            <p class="text-faded mb-0">Centro Federal de Educação Tecnológica de Minas Gerais</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="callout text-center content-section text-black">
            <div class="container">
                <div class="content-section-heading">
                    <p style="font-size: 350%" class="mb-5">Grupos relacionados</p><br>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <a href="https://www.gel.org.br/" style="text-decoration:none;color: #000157">
                            <span>
                                <img style="width:100px; height: 100px" src="{url}assets/images/gel.png" class="img-fluid" alt="Responsive image"/>
                            </span>
                            <h4>
                                <strong>Gel</strong>
                            </h4>
                            <p class="mb-0">Grupo de estudos literários</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0" >
                        <a href="#" style="text-decoration:none;color: #000157">
                            <span>
                                <img style="width:100px; height: 100px"  src="{url}assets/images/if.png" class="img-fluid" alt="Responsive image"/>
                            </span>
                            <h4>
                                <strong>IF</strong>
                            </h4>
                            <p class="mb-0">Instituto federal</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                        <a href="#" style="text-decoration:none;color: #000157">
                            <span>
                                <img style="width:100px; height: 100px" src="{url}assets/images/unispng.png" class="img-fluid" alt="Responsive image"/>
                            </span>
                            <h4>
                                <strong>Unis</strong>
                            </h4>
                            <p class="mb-0">Grupo Unis</p>
                        </a>
                    </div>
                    <a href="#">
                        <div class="col-lg-3 col-md-6">
                            <a href="#" style="text-decoration:none;color: #000157">
                                <span>
                                    <img style="width:100px; height: 100px" src="https://www.shareicon.net/data/256x256/2015/10/11/119658_development_431x512.png" class="img-fluid" alt="Responsive image"/>
                                </span>
                                <h4>
                                    <strong>CodeIgniter</strong>
                                </h4>
                                <p class="mb-0">cd framework php</p>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section id="contact" class="content-section bg-primary text-white">
            <div class="container text-center">
                <h2 class="mb-4">Comunique-nos</h2>
                <p class="light"><b>Email:</b> edilainetoledo@cefetmg.br</p>
                <p class="light"><b>Logadouro:</b> Avenida dos Imigrantes - de 884 a 1290 - lado par</p>
                <p class="light"><b>Cidade:</b> Varginha - MG</p>
                <p class="light"><b>Telefone:</b> (35) 98807-7721</p>
            </div>
        </section>
        <section  class="map">                           
            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.916473635356!2d-45.42152608505849!3d-21.550121085718317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ca928e9fb815ef%3A0xf534eb8342f76ad!2sCentro+Federal+de+Educa%C3%A7%C3%A3o+Tecnol%C3%B3gica+-+Campus+VIII+-+Administra%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1536105467888"></iframe>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <p class="text-muted small mb-0">Copyright &copy; Gelldis 2018</p>
            </div>
        </footer>
        <div class="modal fade" id="modal_login_moderador" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <form method="post" action="{url}acessar/moderador" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Acessar o sistema administrativo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email">Email:</label> 
                            <input type="email" class="form-control" name="email" id="email" required/> 
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label> 
                            <input type="password" class="form-control" name="senha" id="senha" required/> 
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-primary">Cancelar</button>
                        <button type="submit" class="btn btn-secondary">Acessar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="modal_about" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sobre nós</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">  
                        <p>                     
                            A partir do interesse pessoal e acadêmico dos servidores das 
                            áreas de Ciências da Linguagem e de Ciências Humanas, lotados
                            na unidade CEFET-Varginha, e de possibilidades de pesquisas 
                            nesta área e região sul mineira em que esta instituição encontra-se, 
                            houve a iniciativa de criar esse grupo na intenção de desenvolver 
                            atividades que entrelacem o ensino, a pesquisa e a extensão, com
                            base na formação acadêmica dos pesquisadores, nas linhas de pesquisa 
                            a que se vinculam e nas demandas regionais que se apresentam nas áreas
                            de ciências humanas e da linguagem.
                        </p>                        
                    </div>
                </div>
            </div>
        </div>
		
		
		
		<div class="modal fade" id="modal_apresentacaosill" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Apresentação SILL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">  
                        <p>                     
                            Apresentação SILL
                        </p>                        
                    </div>
                </div>
            </div>
        </div>
		
		<div class="modal fade" id="modal_programacaosill" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Programação SILL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">  
                        <p>                     
                            01/01/2001
							Lore Ipsum met amet dor
							<br>
							02/02/2002
							Ab Cdefg hijkl mno
                        </p>                        
                    </div>
                </div>
            </div>
        </div>
		
		<div class="modal fade" id="modal_inscricaosill" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">INSCRIÇÃO SILL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">                      
                            <?php
							
							
							
							/*
							
							
							
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
		
		<div class="modal fade" id="modal_comissaoorganizadorasill" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Comissão organizadora do SILL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">  
                        <p>                     
                            <b>Fulano de tal</b><br>
							<i>(xx) x xxxx-xxxx</i>
							<br>
							<b>Ciclano de tal</b><br>
							<i>(xx) x xxxx-xxxx</i>
                        </p>                        
                    </div>
                </div>
            </div>
        </div>
		
		<div class="modal fade" id="modal_contatosill" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Entre em contato conosco</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">  
                        <p> Você pode falar conosco via:<br>
                            <b>e-mail:</b>xxxx@gmail.com<br>
							<b>Telefone:</b>(xx) x xxxx-xxxx
                        </p>                        
                    </div>
                </div>
            </div>
        </div>	
		
        <a class="scroll-to-top js-scroll-trigger" href="#page-top">
            <i class="fa fa-angle-up fa-3x" style="color: #000"></i>      
        </a>
        <script src="{url}assets/layout_principal/vendor/jquery/jquery.min.js"></script>
        <script src="{url}assets/layout_principal/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{url}assets/layout_principal/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="{url}assets/layout_principal/js/stylish-portfolio.min.js"></script>
    </body>
</html>
