<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<br>
<div class="jumbotron" style="background-color: #FCFCFC">
    <h1>{nome}</h1>
    <br><br>
    <h4>Espelho no lattes:<p class="lead" style="float: right"><a href="{espelho_link}" target="__blanck">http://dgp.cnpq.br/espelhoGrupo/{id_pesquisa}</a></p> </h4>
    <br><br>
    <h4 style="text-align: center">Pesquisadores:</h4>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Titulação</th>
                <th scope="col">Data de inclusão</th>
                <th scope="col">Curriculo lattes</th>
                <th scope="col">Espelho do pesquisador</th>      
            </tr>
        </thead>
        <tbody> 
            {pesquisadores}
            <tr>
                <td>{nome}</td>
                <td>{titulacao}</td>
                <td>{data_inclusao}</td>
                <td><a href="{lattes_link}" target="__blanck" class="btn btn-primary">Abrir currículo</a></td>
                <td><a href="{espelho_membro_link}" target="__blanck" class="btn btn-warning">Abrir Espelho</a></td>
            </tr>
            {/pesquisadores}
        </tbody>
    </table>
    <br><br>
    <h4 style="text-align: center">Estudantes:</h4>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Nivel de treinamento</th>
                <th scope="col">Data de inclusão</th>
                <th scope="col">Curriculo lattes</th>
                <th scope="col">Espelho do estudante</th>      
            </tr>
        </thead>
        <tbody> 
            {estudantes}
            <tr>
                <td>{nome}</td>
                <td>{nivel_de_treinamento}</td>
                <td>{data_inclusao}</td>
                <td><a href="{lattes_link}" target="__blanck" class="btn btn-primary">Abrir currículo</a></td>
                <td><a href="{espelho_estudante_link}" target="__blanck" class="btn btn-warning">Abrir Espelho</a></td>
            </tr>
            {/estudantes}
        </tbody>
    </table>
    <a class="btn btn-warning" href="{url}blog/pesquisas"> <i class="fa fa-undo"></i> Voltar</a>
</div>

