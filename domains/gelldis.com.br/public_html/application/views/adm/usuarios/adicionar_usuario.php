<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<form method="post" class="form" action="{url}gerenciar/usuarios/adicionar">
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="Nome">Nome completo:</label>
        <input type="text" name="nome" id="Nome" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" class="form-control" required>
    </div> 
    <div class="form-group">
        <label for="rep_senha">Repetir senha:</label>
        <input type="password" name="rep_senha" id="senha" class="form-control" required>
    </div>  
    <div class="form-group">
        <button class="btn btn-success" type="submit"> <i class="fa fa-save" ></i> Salvar</button>
        <a class="btn btn-success" href="{url}gerenciar/usuarios/0"> <i class="fa fa-undo"></i> Voltar</a>
    </div>
</form>

