<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form method="post" action="{url}gerenciar/pesquisar/adicionando" >
    <div class="form-group">
        <label for="nome" > Nome da linha de pesquisa: </label>
        <input type="text" name="nome" id="nome" class="form-control" required="true"/>
    </div> 
    <div class="form-group">
        <label for="espelho_link" > Link para CNPQ/Espelho: </label>
        <input type="text" name="espelho_link" id="espelho_link" class="form-control" required="true"/>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit"> <i class="fa fa-save" ></i> Salvar</button>
        <a class="btn btn-success" href="{url}gerenciar/pesquisas/0"> <i class="fa fa-undo"></i> Voltar</a>
    </div>
</form>