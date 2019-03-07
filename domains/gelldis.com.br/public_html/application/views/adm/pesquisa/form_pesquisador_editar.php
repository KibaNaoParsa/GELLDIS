<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form method="post" action="{url}gerenciar/pesquisador/editando/{id_membro}" >
    <div class="form-group">
        <label for="nome" > Nome: </label>
        <input type="text" name="nome" id="nome" class="form-control" required="true" value="{nome}"/>
    </div> 
    <div class="form-group">
        <label for="titulacao" > Titulação: </label>
        <input type="text" name="titulacao" id="titulacao" class="form-control" required="true" value="{titulacao}"/>
    </div>
    <div class="form-group">
        <label for="data_inclusao" > Data de inclusão: </label>
        <input type="date" name="data_inclusao" id="data_inclusao" class="form-control" required="true" value="{data_inclusao}"/>
    </div>
    <div class="form-group">
        <label for="lattes_link" > Curriculo lattes: </label>
        <input type="text" name="lattes_link" id="lattes_link" class="form-control" value="{lattes_link}"/>
    </div>
    <div class="form-group">
        <label for="espelho_membro_link" > Espelho no CNPQ: </label>
        <input type="text" name="espelho_membro_link" id="espelho_membro_link" class="form-control" value="{espelho_membro_link}"/>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit"> <i class="fa fa-save" ></i> Salvar</button>
        <a class="btn btn-success" href="{url}gerenciar/pesquisas"> <i class="fa fa-undo"></i> Voltar</a>
    </div>
</form>