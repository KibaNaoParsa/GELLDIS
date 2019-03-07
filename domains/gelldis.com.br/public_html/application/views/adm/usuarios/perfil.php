<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h2> Alterar senha </h2>

<form method="post" class="form" action="{url}gerenciar/usuarios/perfil">
    <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="rep_password">Repetir senha:</label>
        <input type="password" name="rep_password" id="rep_password" class="form-control" required>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit"> <i class="fa fa-save" ></i> Salvar</button>
    </div>
</form>

