<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="abaixo10">
    <main role="main">
        <div class="container">
            <!-- Exemplo de linha de colunas -->
            <div class="row">
                {noticias}
                <div class="card col-md-4" style="margin-bottom: 30px;	">
                    <div class="card-header">
                        <h4>{titulo}</h4>
                    </div>
                    <div class="card-body">
                        <p>{texto}...</p>
                    </div>
                    <div class="card-footer">
                        <p><a class="btn btn-secondary" href="{url}blog/evento/{id_eventos_participados}" role="button">Ler mais »</a></p>
                    </div>
                </div>  
                {/noticias}
                <hr>
            </div>
			<div class="row" style="display:flex; justify-content: center;">
				<a class="btn btn-warning btn-lg" href="{url}blog/noticias/{ene}" role="button" >Ver mais ↓</a>
			</div>
			<br><br>
    </main>
</div>
