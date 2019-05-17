<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Evento extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function form_evento() {
        $dados['url'] = base_url();
        $dados['display'] = 'none';
        $dados['acao'] = "ADICIONANDO EVENTO";
        $dados["conteudo"] = $this->parser->parse("adm/evento/form_evento", $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function upar_evento() {
        if ($this->Crud->insere("eventos_participados", $this->input->post())) {            
            header("Location:".base_url()."upar/imagens/evento/".$this->db->insert_id()."/1");
        } else {
            echo "Erro ao inserir os dados para cadastro de evento";
        }
    }
    
    public function editando_evento($id) {
        $where["id_eventos_participados"] = $id;
        if ($this->Crud->update("eventos_participados", $this->input->post(),$where)) {
            header("Location:".base_url()."listar/eventos");
        } else {
            echo "Erro ao inserir os dados para cadastro de evento";
        }
    }

    public function listar_eventos() {
        $dados['url'] = base_url();
        $dados['display'] = 'none';
        $dados['acao'] = "EVENTOS OCORRIDOS";
        $dados["eventos"] = $this->Crud->select("eventos_participados");
        foreach ($dados["eventos"] as $key => $value) {
            $dados["eventos"][$key]["url"] = base_url();
        }
        $dados["conteudo"] = $this->parser->parse("adm/evento/tabela_eventos", $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function excluir_evento($id) {
        $dados["url"] = base_url();
        $where["id_eventos_participados"] = $id;
        if ($this->Crud->delete("eventos_participados", $where)) {
            header("Location:".base_url()."listar/eventos");
        } else {
            echo 'Erro ao excluir o evento';
        }
    }

    public function editar_evento($id) {
        $where["id_eventos_participados"] = $id;
        if ($dados = $this->Crud->select("eventos_participados", '*', $where)[0]) {
            $dados["url"] = base_url();
            $dados["display"] = "none";
            $dados['acao'] = "EDITANDO EVENTO";
            $dados["id_evento"] = $id;
            $dados["conteudo"] = $this->parser->parse("adm/evento/form_evento_editar", $dados, true);
            $this->parser->parse('adm/layout_adm', $dados);
        } else {
            echo "Erro ao selecionar evento";
        }
    }

    public function form_imagens() {
        $dados['url'] = base_url();
        $dados['display'] = 'none';
        $dados['acao'] = "GALERIA - TABELA DE EVENTOS";
        $dados["eventos"] = $this->Crud->select("eventos_participados");
        foreach($dados['eventos'] as $key => $value){
            $dados['eventos'][$key]['url'] = base_url();
        }
        $dados["conteudo"] = $this->parser->parse("adm/evento/tabela_listar_eventos", $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function tabela_imagens_eventos($id_evento,$rec = FALSE){
        $where['id_evento_fk'] = $id_evento;
        $dados['url'] = base_url();
        
        if ($rec == FALSE) {
            $dados["display"] = "none";
        } else {
            $dados['display'] = 'block';
            $dados['cor_alert'] = "success";
            $dados['msg_erro'] = "Evento cadastrado, aqui você poderá adicionar imagens para o evento";
        }
        
        $dados['acao'] = "GALERIA DO EVENTO";
        $dados['id_evento_fk'] = $id_evento;
        $dados['imagens'] = $this->Crud->select('imagem', '*', $where);
        foreach($dados['imagens'] as $key => $value){
            $dados['imagens'][$key]['url'] = base_url();
        }
        $dados['conteudo'] = $this->parser->parse('adm/evento/tabela_listar_imagens', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);

    }

    public function abrir_upload_imagens($id_evento){
        $dados['url'] = base_url();
        $dados['id_evento_fk'] = $id_evento;
        $dados['display'] = 'none';
        $dados['acao'] = "ADICIONANDO IMAGENS DO EVENTO";
        $dados['conteudo'] = $this->parser->parse('adm/evento/form_upload_imagem', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function excluir_imagem($id_imagem){
        $where['id_imagem'] = $id_imagem;
        $data['imagem'] = $this->Crud->select('imagem', 'id_imagem, extensao, id_evento_fk', $where);
        $ext = $data['imagem'][0]['extensao'];
        $imagem = $id_imagem . '.' . $ext;
        $id_evento_fk = $data['imagem'][0]['id_evento_fk'];
        if($this->Crud->delete('imagem', $where)){
            $caminho = 'uploads/imagens_evento/' . $imagem;
            if(unlink($caminho)){
                redirect('upar/imagens/evento/'.$id_evento_fk);
            }else{
                echo 'Erro ao excluir a imagem!';
            }
            
        }else{
            echo 'Erro ao excluir a imagem!';
        }

    }

    public function upar_imagens() {
        $diretorio = "uploads/imagens_evento";
        $insere["id_evento_fk"] = $this->input->post()["evento"];
        $imagem = isset($_FILES['imagem']) ? $_FILES['imagem'] : FALSE;
        for ($controle = 0; $controle < count($imagem['name']); $controle++) {
            $NomeImagem = $imagem['name'][$controle];
            $exp = explode(".", $NomeImagem);
            $ext = end($exp);
            $insere["extensao"] = $ext;
            if (!$this->Crud->insere("imagem", $insere)) {
                echo "Erro ao efetuar upload";
            }
            //$this->db->insert_id();
            $imagem['name'][$controle] = $this->db->insert_id() . "." . $ext;
            $destino = $diretorio."/".$imagem['name'][$controle];
            if (!move_uploaded_file($imagem['tmp_name'][$controle], $destino)) {                
                echo "Erro ao realizar upload";
            }
        }
        header('Location: '. base_url().'blog/galeria/'.$insere["id_evento_fk"]);
    }

}
