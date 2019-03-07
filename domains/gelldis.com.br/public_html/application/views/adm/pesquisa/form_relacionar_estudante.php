<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form method="post" action="{url}gerenciar/relacionando/estudante" >
    <div class="form-group">
        <label for="id_estudante" > Estudante: </label>
        <select class="form-control" required="true" name="id_estudante" id="id_estudante">
            {estudantes}
            <option value="{id_estudante}">{nome}</option>
            {/estudantes}
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
        <a class="btn btn-success" href="{url}gerenciar/relacao/estudantes/0"> <i class="fa fa-undo"></i> Voltar</a>
    </div>
</form>
