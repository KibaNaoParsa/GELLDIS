<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<table id="tabela" class="table table-bordered">
    <thead>
        <tr>
            <th>Membro</th>
            <th>Pesquisa</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        {data}
        <tr>
            <td> {membronome} </td>
            <td> {pesquisanome} </td>
            <td> <a class="btn btn-danger" href="{url}gerenciar/relacao/excluirpesquisador/{id_membro}/{id_pesquisa}"> <i class="fa fa-trash"></i></a> </td>
        </tr>
        {/data}
    </tbody>
</table>

<div class="col-sm-12" style="margin-top: 2%; margin-bottom: 2%;">
    <a class="btn btn-success" href="{url}gerenciar/relacao/pesquisador"> <i class="fa fa-plus-circle"></i> Adicionar</a>
</div>
