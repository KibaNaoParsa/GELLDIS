<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="pt-br"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sistema para o grupo de pesquisa GELLDIS">
        <meta name="author" content="Alunos" >
        <title>Cadastro de Projeto</title>
        <link href="{url}assets/layout_adm/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{url}assets/layout_adm/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="{url}assets/layout_adm/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="{url}assets/layout_adm/css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="{url}assets/DataTables/datatables.css" />
        <script src="{url}assets/tinymce/tinymce.min.js"></script>
    </head>
    <style>
        #linhas_de_pesquisa{
            overflow: auto;
        }
    </style>
    <body class="fixed-nav bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="#">SILL</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" >
                
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="alert alert-{cor_alert} alert-dismissible fade show" style="display: {display}" role="alert">                    
                    <!--<strong>
                        {msg_erro}
                    </strong> 
                    <button type="button>" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </div>
                
					 <h6><b><?php echo $NOME ?></b>, insira as informações sobre seu trabalho.                
                </h6>
                <h6><b>E-mail:</b> <?php echo $EMAIL ?>                
                </h6>
                <h6><b>GT:</b> <?php echo $NOME_EVENTO ?>                
                </h6>
                <h6><b>GT:</b> <?php echo $NECESSIDADES ?>                
                </h6>
                <br>
                
                <form method="post" action="{url}inscricao/inscricao_artigo" class="modal-content">
              	
						<div class="form-group">
                  						
						<?php
						
							echo '<input type="hidden" name="nome" value="'.$NOME.'">'.
								  '<input type="hidden" id="instituicao" name="instituicao" value="'.$INSTITUICAO.'">'.
								  '<input type="hidden" id="email" name="email" value="'.$EMAIL.'">'.
								  '<input type="hidden" id="cpf" name="cpf" value="'.$CPF.'">'.
								  '<input type="hidden" id="necessidade" name="necessidade" value="'.$NECESSIDADES.'">'.
								  '<input type="hidden" id="idEVENTO" name="idEVENTO" value="'.$idEVENTO.'">';
						
						?>              	
              		
							<!--<input type="hidden" id="nome" name="nome" value="aaaa" />
							<input type="hidden" id="instituicao" name="instituicao" value="<?php $INSTITUICAO ?>">
							<input type="hidden" id="email" name="email" value="<?php $EMAIL ?>">
							<input type="hidden" id="cpf" name="cpf" value="<?php $CPF ?>">
							<input type="hidden" id="idEVENTO" name="idEVENTO" value="<?php $idEVENTO ?>">-->
						
						</div>
                 	    
                	<div class="form-group">
                  	<label for="titulo">Título do artigo: </label> 
                     <input type="text" class="form-control" name="titulo" id="titulo" required/> 
                 	</div>
                	<div class="form-group">
                  	<label for="palavras">Palavras-chave (3-5, separadas por ; ): </label><br> 
                     <input type="text" class="form-control" name="palavras_chave" id="palavras_chave" required/> 
                 	</div>
            
                  <div class="form-group">
                  	<label for="artigo">Artigo:</label> <br>
                    	<textarea name="artigo" style="width: 100%; height: 250px;"> </textarea> 
                  </div>       	
                  <div class="modal-footer">
                  	<button type="button" data-dismiss="modal" class="btn btn-danger">Cancelar</button>
                  	<button type="submit" class="btn btn-success">Cadastrar</button>
                  </div>
                
                </form>                  

            </div>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
		<script
  		src="https://code.jquery.com/jquery-3.3.1.min.js"
  		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
 		 crossorigin="anonymous"></script>
        <script src="{url}assets/layout_adm/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{url}assets/layout_adm/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="{url}assets/layout_adm/vendor/chart.js/Chart.min.js"></script>
        <script src="{url}assets/layout_adm/vendor/datatables/jquery.dataTables.js"></script>
        <script src="{url}assets/layout_adm/vendor/datatables/dataTables.bootstrap4.js"></script>
        <script src="{url}assets/layout_adm/js/sb-admin.min.js"></script>
        <script src="{url}assets/layout_adm/js/sb-admin-datatables.min.js"></script>
        <script src="{url}assets/layout_adm/js/sb-admin-charts.min.js"></script>
        <script src="{url}assets/DataTables/datatables.js"></script>
        <script src="{url}assets/js/main.js"></script>
    </div>
</body>

</html>
