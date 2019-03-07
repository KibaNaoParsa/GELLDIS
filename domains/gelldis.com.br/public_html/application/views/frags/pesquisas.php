<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="list-group" style="padding-top: 5%">
    {pesquisas}
  <a href="{url}blog/pesquisa/{id_pesquisa}" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{nome}</h5>
    </div>
    <small class="text-muted">Clique e saiba mais sobre os membros.</small>
  </a>  
    {/pesquisas}
</div>