<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<form enctype="multipart/form-data" method="POST" action="{url}adm/Evento/upar_imagens" class="form">
    <input type="hidden" value='{id_evento_fk}' name="evento"/>
    <div class="form-group">
        <input type="file" name="imagem[]" multiple="multiple" class="form-control-file" required/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Enviar</button>
        <a class="btn btn-success" href="{url}upar/imagens/evento/{id_evento_fk}"> <i class="fa fa-undo"></i> Voltar</a>
    </div>
</form>
