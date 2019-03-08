<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<form method="post" action="{url}gerenciar/reuniao/adicionar" >
    <div class="form-group">
        <label for="titulo" > Título: </label>
        <input type="text" name="titulo" id="titulo" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="date">Data</label>
        <input type="date" id="date" name="data" class="form-control" required/>
    </div>
    <div class="form-group">
        <textarea rows="12" name="texto"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit"> <i class="fa fa-save" ></i> Salvar</button>
        <a class="btn btn-success" href="{url}gerenciar/reuniao/0"> <i class="fa fa-undo"></i> Voltar</a>
    </div>
</form>

<script>
    tinymce.init({
        selector: 'textarea',
        language_url: '{url}assets/js/pt_BR.js',
        plugins: [
            'preview link'
        ]
    });
</script>

