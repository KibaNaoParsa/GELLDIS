<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form method="post" action="{url}gerenciar/relacionando/pesquisador" >
    <div class="form-group">
        <label for="id_membro" > Pesquisador: </label>
        <select class="form-control" required="true" name="id_membro" id="id_membro">
            {pesquisadores}
            <option value="{id_membro}">{nome}</option>
            {/pesquisadores}
        </select>
    </div> 
    <div class="form-group">
        <label for="id_pesquisa" > Pesquisa: </label>        
        <select class="form-control" required="true" name="id_pesquisa" id="id_pesquisa">
            {pesquisas}
            <option value="{id_pesquisa}">{nome}</option>
            {/pesquisas}
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit"> <i class="fa fa-save" ></i> Salvar</button>
        <a class="btn btn-success" href="{url}gerenciar/relacao/pesquisadores/0"> <i class="fa fa-undo"></i> Voltar</a>
    </div>
</form>
