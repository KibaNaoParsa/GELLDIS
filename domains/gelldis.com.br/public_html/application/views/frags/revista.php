<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #ffc107;
  color: white;
  border-radius: 5px;
}

.pagination a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
</style>
<div style="border:1px solid black;width: 100%;height: 120%;margin-top: -10%;background-color: white;text-align: center;box-shadow: 15px -10px 3px #000;
   -webkit-box-shadow: 15px -10px 3px #000;
   -moz-box-shadow: 15px -10px 3px #000;">
    <br><br><br>
    <h2>Revista</h2>
    <br><br><br>
    <img class="img-thumbnail imagem_upload" src="https://www.gelldis.com.br/assets/layout_principal/logoGelldis.png">
    <br><br><br><br><br><br>
    <h3>Em breve</h3>
</div>
<br><br>
<div class="pagination" style="display:flex; justify-content: center;">
  <a href="#">&laquo;</a>
  <a href="#" class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
<!--
<div style='margin-top: 2%'>
    <img class="img-thumbnail" src="{url}assets/_arbeit.png" width='400' height='380'/>
</div>
-->