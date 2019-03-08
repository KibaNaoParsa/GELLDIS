<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    .imagem_upload{
        width: 220px;
        height: 200px;
    }
</style>

<div id="abaixo10">
    <div class="starter-template">
        {noticia}
        <h1>{titulo}</h1>
        <p class="lead">{data_eventos_participados}</p>
        {texto}
        {/noticia}
    </div>
    <div class="row">
        {imagens}        
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail">
                <img class="img-thumbnail imagem_upload" src="{url}uploads/imagens_evento/{id_imagem}.{extensao}">
            </a>
        </div>  
        {/imagens}

    </div>
    <br>
    <p>
        <a class="btn btn-warning btn-lg" href="{url}blog/galeria/{id_evento}" role="button">Galeria »</a>
        <a class="btn btn-warning btn-lg" href="{url}blog/noticias/3" role="button"> <i class="fa fa-undo"></i> Voltar</a>
    </p>
</div>

