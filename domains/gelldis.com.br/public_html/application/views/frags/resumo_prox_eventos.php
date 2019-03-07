<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="abaixo10">
    <main role="main">
        <div class="container">
            <div class="row">
                {agenda}
                <div class="card col-md-4" style="margin-bottom: 30px;" >
                    <div class="card-header">
                        <h4>{titulo}</h4>
                    </div>
                    <div class="card-body">
                        <!--<p class="lead">Tipo: <i>{tipo_evento}</i> </p>-->
                        <p>{texto}...</p>
                    </div>
                    <div class="card-footer">
                        <p><a class="btn btn-secondary" href="{url}blog/agenda/{id_agenda}" role="button" >Ler mais »</a></p>
                    </div>
                </div>  
                {/agenda}
                <hr>
            </div>
            <div class="row" style="display:flex; justify-content: center;">
                <a class="btn btn-warning btn-lg" href="{url}blog/eventos/{ene}" role="button" >Ver mais ↓</a>
            </div>
            <br><br>
            </main>
        </div>
