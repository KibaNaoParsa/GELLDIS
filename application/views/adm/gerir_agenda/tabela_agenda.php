<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script>
    function salvaId(id) {
        sessionStorage.setItem("id_agenda", id);
    }
    function cancelar() {
        sessionStorage.removeItem("id_agenda");
    }
    function confirmar(url) {
        var aUrl = url;
        var id_agenda = sessionStorage.getItem("id_agenda");
        cancelar();
        window.location.href = aUrl + 'gerenciar/agenda/excluir/' + id_agenda;
    }
</script>


<table id="tabela" class="table table-bordered">
    <thead>
        <tr>
            <th>Título</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        {agenda}
        <tr>
            <td> {titulo} </td>
            <td> <a class="btn btn-primary" href="{url}gerenciar/agenda/editar/{id_agenda}"><i class="fa fa-edit"></i></a>  </td>
            <td> <a class="btn btn-danger" href="#" onclick="salvaId({id_agenda})" data-target="#confirma" data-toggle="modal"><i class="fa fa-trash"></i></a> </td>
        </tr>
        {/agenda}
    </tbody>
</table>

<div class="modal fade" id="confirma">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Deseja excluir?</h5>
                <button onclick="cancelar();" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Deseja mesmo excluir o registro? Não será possivel desfazer.
                </p>
            </div>
            <div class="modal-footer">
                <button onclick="cancelar();" data-dismiss="modal" class="btn btn-danger">Cancelar</button>
                <button onclick="confirmar('{url}');" class="btn btn-success">Confirmar</button>
            </div>
        </div>
    </div>
</div>