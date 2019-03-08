<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<form method="post" class="form" action="{url}adm/Evento/editando_evento/{id_evento}">
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" class="form-control" required="true" value="{titulo}">
    </div>
    <div class="form-group">
        <label for="data_eventos_participados">Data:</label>
        <input type="date" name="data_eventos_participados" id="data_eventos_participados" class="form-control" required="true" value="{data_eventos_participados}">
    </div>
    <div class="form-group">
        <textarea rows="12" name="texto">{texto}</textarea >
    </div>

    <div class="form-group">
        <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Salvar</button>
		<a class="btn btn-success"  href="{url}listar/eventos"><i class="fa fa-undo"></i> Voltar</a>
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
