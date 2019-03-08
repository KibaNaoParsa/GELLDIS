<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>GELLDIS</title>
        <link href="{url}assets/layout_adm/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{url}assets/css/main.css" rel="stylesheet">
        <link href="{url}assets/layout_adm/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg fixed-top " style="background-color: transparent; font-size: 30px;" >
            <div class="container">
                <a class="navbar-brand" href="{url}"><strong style="color: #FFF ;">GELLDIS</strong></a>
                <a class="nav-link menu-toggle rounded navbar-toggler" href="#"><strong style="color: #FFF ; "><i class="fa fa-bars" ></i> Menu</strong>

                            </a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link menu-toggle rounded " href="#"><strong style="color: #FFF ; "><i class="fa fa-bars" ></i> Menu</strong>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a class="js-scroll-trigger" href="#page-top"></a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="{url}">Home</a>
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
                <hr/>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" {acessoAdm} >Acesso administrativo</a>
                </li>
            </ul>
        </nav>
        <section style="background: url('{url}assets/layout_principal/img/bg-masthead.jpg'); background-size: cover; background-position: center center; padding-top: 15%" class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 style="color: #FFF">{area}</h1>
                    </div>
                </div>
        </section>

        <div class="container">    
            {conteudo}
        </div>
        <script src="{url}assets/layout_adm/vendor/jquery/jquery.min.js"></script>
        <script src="{url}assets/layout_adm/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{url}assets/layout_principal/js/stylish-portfolio.min.js"></script>
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
        <footer class="footer text-center">
            <div class="container">
                <p class="text-muted small mb-0">Copyright © Gelldis 2018</p>
            </div>
        </footer>
    </body>
</html>


