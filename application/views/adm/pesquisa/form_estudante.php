<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form method="post" action="{url}gerenciar/estudante/adicionando" >
    <div class="form-group">
        <label for="nome" > Nome: </label>
        <input type="text" name="nome" id="nome" class="form-control" required="true"/>
    </div> 
    <div class="form-group">
        <label for="nivel_de_treinamento" > Nivel de treinamento: </label>
        <input type="text" name="nivel_de_treinamento" id="nivel_de_treinamento" class="form-control" required="true"/>
    </div>
    <div class="form-group">
        <label for="data_inclusao" > Data de inclusão: </label>
        <input type="date" name="data_inclusao" id="data_inclusao" class="form-control" required="true"/>
    </div>
    <div class="form-group">
        <label for="lattes_link" > Link do lattes: </label>
        <input type="text" name="lattes_link" id="lattes_link" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="espelho_estudante_link" > Espelho no CNPQ: </label>
        <input type="text" name="espelho_estudante_link" id="espelho_estudante_link" class="form-control"/>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit"> <i class="fa fa-save" ></i> Salvar</button>
        <a class="btn btn-success" href="{url}gerenciar/pesquisas"> <i class="fa fa-undo"></i> Voltar</a>
    </div>
</form>