<script>
    function salvaId(id) {
        sessionStorage.setItem("id_imagem", id);
    }
    function cancelar() {
        sessionStorage.removeItem("id_imagem");
    }
    function confirmar(url) {
        var aUrl = url;
        var id_imagem = sessionStorage.getItem("id_imagem");
        cancelar();
        window.location.href = aUrl + 'adm/Evento/excluir_imagem/' + id_imagem;
    }
</script>

<table id="tabela" class="table table-responsive-xl table-bordered">
    <thead>
        <tr>
            <th>Imagem</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        {imagens}
        <tr>
            <td> <img src="{url}uploads/imagens_evento/{id_imagem}.{extensao}" width='80' height='60' /> </td>
            <td> <a class="btn btn-danger" href="#" onclick="salvaId({id_imagem})" data-target="#confirma" data-toggle="modal"><i class="fa fa-trash"></i></a> </td>
        </tr>
        {/imagens}
    </tbody>
</table>

<div class="col-sm-12" style="margin-top: 2%; margin-bottom: 2%;">
    <a class="btn btn-success" href="{url}adicionar/imagens/{id_evento_fk}"> <i class="fa fa-plus-circle"></i> Adicionar imagens</a>
    <a class="btn btn-success" href="{url}upar/imagens"> <i class="fa fa-undo"></i> Voltar</a>
</div>


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