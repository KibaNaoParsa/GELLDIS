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
        <style>
				table, th, td {
  					border: 1px solid black;
  					text-align: center;
				}
		  </style>
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
                	  <a class="js-scroll-trigger" data-toggle="modal"  data-target="#modal_inscricaosill" href="#">Inscrição 3° SILL</a>
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
                    <!--">"--><button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
                                <img style="width:200px; height: 100px" src="https://www.gelldis.com.br/assets/layout_principal/logoGelldis.png" class="img-fluid" alt="Responsive image"/>
                            </span>
                            <h4>
                                <strong>Gelldis</strong>
                            </h4>
                            <p class="mb-0">Grupo de estudos Linguísticos, Literários, Discursivos e Semióticos do CEFET Campus Varginha</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0" >
                        <a href="#" style="text-decoration:none;color: #000157">
                            <span>
                                <img style="width:100px; height: 100px"  src="https://portal.ifsuldeminas.edu.br/images/PDFs/comunicacao/logotipos/ifsuldeminas/IFSULDEMINAS_vertical.png" class="img-fluid" alt="Responsive image"/>
                            </span>
                            <h4>
                                <strong>IF</strong>
                            </h4>
                            <p class="mb-0">Instituto Federal do Sul de Minas Gerais</p>
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
                                    <img style="width:100px; height: 100px" src="http://www.dedc.cefetmg.br/wp-content/uploads/sites/79/2017/08/logotipo_DEDC_antigo_branco.png" class="img-fluid" alt="Responsive image"/>
                                </span>
                                <h4>
                                    <strong>DEDC</strong>
                                </h4>
                                <p class="mb-0">Diretoria de Extensão e Desenvolvimento Comunitário do CEFET-MG</p>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <section id="contact" class="content-section bg-primary text-white">
            <div class="container text-center">
                <h2 class="mb-4">Comunique-nos</h2>
                <p class="light"><b>Email:</b> simposiovarginha@gmail.com</p>
                <p class="light"><b>Logradouro:</b> Avenida dos Imigrantes - 1000 - Vargem</p>
                <p class="light"><b>Cidade:</b> Varginha - MG</p>
            </div>
        </section>
        <section  class="map">                           
            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.916473635356!2d-45.42152608505849!3d-21.550121085718317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ca928e9fb815ef%3A0xf534eb8342f76ad!2sCentro+Federal+de+Educa%C3%A7%C3%A3o+Tecnol%C3%B3gica+-+Campus+VIII+-+Administra%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1536105467888"></iframe>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <p class="text-muted small mb-0">Copyright &copy; Gelldis <?php echo date("Y"); ?></p>
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
                            O SILL – Simpósio de Língua e Literatura do CEFET-MG Varginha – é uma das atividades de extensão do GELLDIS – Grupo de Estudos Linguísticos, Literários, Discursivos e Semióticos do CEFET-MG Varginha. É evento de caráter científico-acadêmico, cujo objetivo é discutir algumas questões ligadas às diversas linguagens humanas na contemporaneidade, com ênfase ao lugar do discurso, do texto e das interações que permeiam o processo de ensino aprendizagem na educação básica e universitária. É um evento anual, desde 2017, quando firmou suas ações extensionistas junto à DEDC – Diretoria de Extensão e Desenvolvimento Comunitário do CEFET-MG. Um de seus principais objetivos é ser espaço facilitador para discussões, reflexões e ações em torno das práticas de variadas linguagens e, letramentos na atualidade, numa articulação com o ensino e a pesquisa que favorece a todos os envolvidos, sobretudo na região onde o CEFET-MG Varginha encontra-se, com a intenção de fomentar cultura, conhecimento e atividades deste porte em suas especificidades.<br><br>
                            Nesta edição 2019, o SILL propõe-se a discutir questões em torno do multiletramento e multimodalidade, tão emergentes e pontuais em nossas práticas de ensino. <br><br>
                            Com o tema <b>MULTILETRAMENTO E MULTIMODALIDADE: (RE) PENSAR O TEXTO, A LEITURA, A LINGUAGEM</b>, o simpósio tem como objetivo refletir sobre multiletramento e multimodalidade, bem discutir suas particularidades e implicações, e como público-alvo Professores e servidores de Educação Básica; alunos e professores de graduação e pós-graduação em Letras, Comunicação, Pedagogia e áreas afins.
                    		<br><br>
                    		<?php echo anchor("inscricao/gerar_pdf", "Clique aqui para ter acesso às ementas!", array('class'=>"btn btn-light", 'id'=>"botao"));  ?>
                    		<br><br>                            
                        	<b>Data:</b> 08 de Junho de 2019
                            <br>
                            <b>Local:</b> Centro Universitário do Sul de Minas - Campus I (próximo ao SENAI)<br>
                            R. Maria Benedita, 63 - Vila Pinto - Varginha
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
                            <b>Data:</b> 08 de Junho de 2019
                            <br>
                            <b>Local:</b> Centro Universitário do Sul de Minas - Campus I (próximo ao SENAI)<br>
                            R. Maria Benedita, 63 - Vila Pinto - Varginha
                            <br><br>
                            <b><u>8h – Credenciamento</u></b><br><br>
<b><u>9h – Palestra de Abertura </b></u> – “Experiência multimodal: o que é, como fazer/vivenciar?” - Prof. Dr. Guilherme Trielli Ribeiro – UFMG - Belo Horizonte<br><br>
<b><u>10h às 10h30min – intervalo</b></u><br><br>
<b><u>10h30min às 12h30min – Comunicações coordenadas em Grupos de Trabalhos</u></b><br>
1. GT – Educação: métodos e práticas com foco na pedagogia dos multiletramentos no contexto do ensino - Profa. Dra. Flaviane Faria Carvalho - UNIFAL Campus Alfenas<br>
2. GT – Multiletramento e multimodalidade sob o olhar da Linguística - Profa. Dra. Lilian Arão – CEFET-MG Belo Horizonte<br>
3. GT – Literatura, ensino e múltiplos limites - Prof. Dr. Erick Gontiljo Costa - CEFET-MG Varginha<br>
4. GT – Multimodalidade, Multiletramentos e Tecnologias - Prof. Dr. Rogério Barbosa – CEFET-MG Belo Horizonte<br>
5. GT – Linguagens, arte, política: leitura(s) de mundo - Profa. Dra. Cilene M. Pereira – UNINCOR – MG Campus Três Corações<br>
6. GT – Ensino transformador de línguas: atualizando práticas pedagógicas tradicionais para formar o cidadão do século XXI - Profa. Dra. Raquel Bambirra – CEFET-MG Campus Belo Horizonte<br><br>
<b><u>12h30min às 13h45min – Almoço</b></u><br><br>
<b><u>14h – Workshops</u></b><br>
1. Workshop Escrita Criativa: Prof. e escritor Igor Becati – UNIS MG Campus Varginha<br>
2. Workshop Literatura Infantil: Profa. Dra. Adriana Pryscilla Duarte de Melo – UFLA Lavras<br>
3. Workshop Música: Prof. Dr. Celso Augusto dos Santos Gomes - UNIS MG Campus Varginha<br>
4. Workshop Metodologias Ativas: Profa. Ms. Vânia Flores - UNIS MG Campus Varginha<br>
5. Workshop Teatro: Prof. Ms. Héverton Ferreira – CEFET-MG Varginha<br>
6. Workshop Criação de conteúdo audiovisual na web para fins acadêmicos: Prof. Ms. Rafael Almeida - UNIS MG Campus Varginha<br><br>
<b><u>15h30min – intervalo (pausa para o café)</u></b><br><br>
<b><u>15h50min – Palestra de encerramento:</u> “Multiletramento e multimodalidade: (re) pensar o texto, a leitura, a linguagem.” Profa. Dra. Carla Coscarelli - UFMG – Belo Horizonte</b><br><br>
<b><u>17h10min – Atividade Cultural com o grupo “Sassarico”, da cidade de Alfenas-MG</u></b>

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
                            <b>Data:</b> 08 de Junho de 2019
                            <br>
                            <b>Local:</b> Centro Universitário do Sul de Minas - Campus I (próximo ao SENAI)<br>
                            R. Maria Benedita, 63 - Vila Pinto - Varginha
                            <br><br>
                    		<p>
                    		Período para inscrições de comunicação em Simpósio Temático: de 01 de abril a 12 de maio.
                    		<br>
                    		As cartas de aceite serão liberadas entre os dias 13 e 20 de maio.
                    		<br><br>
                    		<?php echo anchor("inscricao/gerar_pdf", "Clique aqui para ter acesso às ementas!", array('class'=>"btn btn-light", 'id'=>"botao"));  ?>
                    		<br><br>
                    		MODALIDADES DE INSCRIÇÃO E INVESTIMENTO:
								<br>
								<table>
									<tr>
										<th>Coordenador de GT</th>
										<th>Apresentação de Trabalho</th>
										<th>Ouvinte</th>									
									</tr>
									<tr>
										<td>Isento</td>
										<td>R$ 20,00</td>
										<td>R$ 10,00</td>									
									</tr>												
								</table>
								<br>
								<b>Observação:</b> Os workshops são ofertados apenas para os inscritos no evento nas seguintes modalidades: coordenador de GT; apresentador de comunicação em GT; ouvinte.
								Assim, a participação nos workshops, bem como no evento, está condicionada à confirmação da quitação da taxa de investimento no simpósio, via conta bancária.
								O comprovante de pagamento da taxa deve ser enviado para o seguinte e-mail: simposiovarginha@gmail.com.
								<br><br>						
								APÓS QUITAÇÃO E ENVIO DE COMPROVANTE, será disponibilizado o link, via e-mail, para acesso e escolha dos workshops.
								<br>
								<b>CONTA PARA DEPÓSITO:</b><br>
								Banco SICOOB<br>
								Ag.: 4092<br>
								C/C: 16247-7<br>
								
								</p>
                    		<form method="post" action="{url}inscricao/efetuar_inscricao" class="modal-content">
                  
                        	<div class="form-group">
                            	<label for="txt_nome">Nome:</label> 
                            	<input type="text" class="form-control" name="txt_nome" id="txt_nome" required/> 
                        	</div>
                        	<div class="form-group">
                           	<label for="txt_cpf">CPF:</label> 
                            	<input type="text" class="form-control" name="txt_cpf" id="txt_cpf" required/> 
                        	</div>
                        	<div class="form-group">
                            	<label for="txt_email">E-mail:</label> 
                            	<input type="email" class="form-control" name="txt_email" id="txt_email" required/> 
                        	</div>
                        	<div class="form-group">
                            	<label for="txt_email">Confirmação de e-mail:</label> 
                            	<input type="email" class="form-control" name="txt_confemail" id="txt_confemail" required/> 
                        	</div>
                        	<div class="form-group">
                            	<label for="txt_instituicao">Instituição:</label> 
                            	<input type="text" class="form-control" name="txt_instituicao" id="txt_instituicao" required/> 
                        	</div>
                        	<h3>Você é portador de necessidades especiais:</h3>                       	
                        	<div class="form-group">
                            	<input type="radio" name="necessidade" value="0" required> Não<br>
                            	<input type="radio" name="necessidade" value="1" > Sim<br>
                            	<input type="text" class="form-control" placeholder="Qual?" name="necessidade_texto" id="necessidade_texto">
                        	</div>
                        	<h3>Você deseja participar como:</h3>
                        	<div class="form-group">
                            	<input type="radio" name="tipo" value="0" required> Ouvinte<br>
                            	<!--<input type="radio" name="tipo" value="1" > Comunicação em GT<br>-->
                        	</div>
                        	<h3>De qual GT você deseja participar?</h3>
                        	<div class="form-group">
                        		<?php
                        			foreach ($EVENTO as $e) {
                        				echo '<input type="radio" name="evento" value="'.$e->idEVENTO.'" required> '.$e->NOME.'<br>';
                        			}
										?>                        	
                        	</div>
                        	
                        	
                    			<div class="modal-footer">
                        		<button type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</button>
                        		<button type="submit" class="btn btn-success">Cadastrar</button>
                    			</div>
                			</form>                  
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
                            Profa. Dra. Carina Adrielle Duarte de Melo Figueiredo - UNIS-MG<br>
                            Profa. Ms. Cintia Cherubino Luckhurst - CEFET-MG<br>
                            Profa. Dra. Edilaine G. F. de Toledo - CEFET-MG<br>
                            Profa. Dra. Emanuela Francisca da Silva - IF Sul de Minas<br>
                            Profa. Ms. Keilla Conceição Petrin Grande - CEFET-MG<br>
                            Prof. Ms. Luciano André Palm - CEFET-MG<br>
                            Roselene Dalcin - Tec. Adm. - Psicóloga CEFET-MG
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
                            <b>SILL: </b>simposiovarginha@gmail.com<br>
							<b>GELLDIS: </b>gelldispesquisa@gmail.com
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
