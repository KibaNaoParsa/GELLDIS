<?php
defined('BASEPATH') or exit('Sai daqui seu cachorro');
?>

<table id="tabela" class="table table-responsive-xl table-bordered">
    <thead>
        <tr>
            <th>Título</th>
        </tr>
    </thead>
    <tbody>
        {eventos}
        <tr>
            <td> <a href="{url}upar/imagens/evento/{id_eventos_participados}/0" > {titulo} </a> </td>
        </tr>
        {/eventos}
    </tbody>
</table>
