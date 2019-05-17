<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

{agenda}
<form method="post" action="{url}gerenciar/agenda/editar/{id_agenda}" >
    <div class="form-group">
        <label for="titulo" > Título: </label>
        <input type="text" name="titulo" id="titulo" value="{titulo}" class="form-control" required/>
    </div>
    <div class="form-group">
        <label for="date">Data</label>
        <input type="date" id="date" name="data" value="{data}" class="form-control" required/>
    </div>
    <div class="form-group">
        <textarea rows="12" name="texto">{texto}</textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit"> <i class="fa fa-save" ></i> Salvar</button>
        <a class="btn btn-success" href="{url}gerenciar/agenda/0"> <i class="fa fa-undo"></i> Voltar</a>
    </div>
</form>
{/agenda}


<script>
    tinymce.init({
        selector: 'textarea',
        language_url: '{url}assets/js/pt_BR.js',
        plugins: [
            'preview link'
        ]
    });
</script>
