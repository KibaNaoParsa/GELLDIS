<?php

defined('BASEPATH') or exit('Sai daqui seu cachorro');

class Pesquisa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $dados['url'] = base_url();
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function listar_pesquisas($inserido = 0) {
        $dados["url"] = base_url();
        if ($inserido != 0) {
            $dados["display"] = "true";
            $dados["cor_alert"] = "success";
            if ($inserido == '1') {
                $dados["msg_erro"] = "Adicionado com sucesso";
            } else if ($inserido == '2') {
                $dados["msg_erro"] = "Editado com sucesso";
            } else if ($inserido == '3') {
                $dados["msg_erro"] = "Excluido com sucesso";
            } else {
                $dados["msg_erro"] = "Sucesso";
            }
        } else {
            $dados["display"] = "none";
        }
        if (!$dados["pesquisas"] = $this->Crud->select("pesquisa")) {
            echo "Não consultou as pesquisas";
        } else {
            foreach ($dados["pesquisas"] as $key => $value) {
                $dados["pesquisas"][$key]["url"] = $dados["url"];
            }
        }
        $dados['acao'] = "LINHAS DE PESQUISA";
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/tabela_pesquisas", $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function adicionar_pesquisa() {
        $dados["url"] = base_url();
        $dados["display"] = "none";
        $dados['acao'] = "ADICIONANDO LINHA DE PESQUISA";
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/form_pesquisas", $dados, TRUE);
        $this->parser->parse("adm/layout_adm", $dados);
    }

    public function adicionando_pesquisa() {
        $insere = $this->input->post();
        if (!$this->Crud->insere("pesquisa", $insere)) {
            echo "Erro ao inserir";
        } else {
            header('Location:' . base_url() . 'gerenciar/pesquisas/1');
        }
    }

    public function listar_pesquisadores($inserido = 0) {
        $dados["url"] = base_url();
        if ($inserido != 0) {
            $dados["display"] = "true";
            $dados["cor_alert"] = "success";
            if ($inserido == '1') {
                $dados["msg_erro"] = "Adicionado com sucesso";
            } else if ($inserido == '2') {
                $dados["msg_erro"] = "Editado com sucesso";
            } else if ($inserido == '3') {
                $dados["msg_erro"] = "Excluido com sucesso";
            } else {
                $dados["msg_erro"] = "Sucesso";
            }
        } else {
            $dados["display"] = "none";
        }
        if (!$dados["pesquisador"] = $this->Crud->select("membro")) {
            echo "Não consultou as pesquisas";
        } else {
            foreach ($dados["pesquisador"] as $key => $value) {
                $dados["pesquisador"][$key]["url"] = $dados["url"];
            }
        }
        $dados['acao'] = "PESQUISADORES";
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/tabela_pesquisadores", $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function adicionar_pesquisador() {
        $dados["url"] = base_url();
        $dados["display"] = "none";
        $dados['acao'] = "ADICIONANDO PESQUISADOR";
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/form_pesquisador", $dados, TRUE);
        $this->parser->parse("adm/layout_adm", $dados);
    }

    public function adicionando_pesquisador() {
        $insere = $this->input->post();
        if (!$this->Crud->insere("membro", $insere)) {
            echo "Erro ao inserir";
        } else {
            header('Location:' . base_url() . 'gerenciar/pesquisador/1');
        }
    }

    public function listar_estudantes($inserido = 0) {
        $dados["url"] = base_url();
        if ($inserido != 0) {
            $dados["display"] = "true";
            $dados["cor_alert"] = "success";
            if ($inserido == '1') {
                $dados["msg_erro"] = "Adicionado com sucesso";
            } else if ($inserido == '2') {
                $dados["msg_erro"] = "Editado com sucesso";
            } else if ($inserido == '3') {
                $dados["msg_erro"] = "Excluido com sucesso";
            } else {
                $dados["msg_erro"] = "Sucesso";
            }
        } else {
            $dados["display"] = "none";
        }
        if (!$dados["estudantes"] = $this->Crud->select("estudante")) {
            echo "Não consultou as pesquisas";
        } else {
            foreach ($dados["estudantes"] as $key => $value) {
                $dados["estudantes"][$key]["url"] = $dados["url"];
            }
        }
        $dados['acao'] = "ESTUDANTES";
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/tabela_estudantes", $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function adicionar_estudante() {
        $dados["url"] = base_url();
        $dados["display"] = "none";
        $dados['acao'] = "ADICIONANDO ESTUDANTE";
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/form_estudante", $dados, TRUE);
        $this->parser->parse("adm/layout_adm", $dados);
    }

    public function adicionando_estudante() {
        $insere = $this->input->post();
        if (!$this->Crud->insere("estudante", $insere)) {
            echo "Erro ao inserir";
        } else {
            header('Location:' . base_url() . 'gerenciar/estudante/1');
        }
    }

    public function relacionar_pesquisador() {
        $dados["url"] = base_url();
        $dados["display"] = "none";
        if (!$dados["pesquisadores"] = $this->Crud->select("membro")) {
            echo "Erro ao pesquisar membros";
        }
        if (!$dados["pesquisas"] = $this->Crud->select("pesquisa")) {
            echo "Erro ao pesquisar pesquisas";
        }
        $dados['acao'] = "RELACIONANDO PESQUISADOR";
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/form_relacionar_pesquisador", $dados, TRUE);
        $this->parser->parse("adm/layout_adm", $dados);
    }

    public function gerir_pesquisador($dc = FALSE) {
        $dados["url"] = base_url();
        if ($dc == FALSE) {
            $dados["display"] = "none";
        } else {
            $dados['display'] = 'block';
            $dados['cor_alert'] = "success";
            $dados['msg_erro'] = "Relação realizada";
        }
        $dados["data"] = $this->Crud->selecetRelacaoMembrosDaPesquisa(base_url());
        $dados['acao'] = "RELAÇÃO PESQUISADOR - PESQUISA";
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/tabela_relacao_pesquisador", $dados, TRUE);
        $this->parser->parse("adm/layout_adm", $dados);
    }

    public function excluir_relacaopesquisador($membro, $pesquisa) {
        if (!$this->Crud->deletaRelacaoMembro($membro, $pesquisa)) {
            echo "Erro ao excluir";
        } else {
            $this->gerir_pesquisador();
        }
    }

    public function relacionando_pesquisador() {
        $insere = $this->input->post();
        if (!$this->Crud->insere("membro_has_pesquisa", $insere)) {
            echo "Erro ao inserir";
        } else {
            header('Location:' . base_url() . 'gerenciar/relacao/pesquisadores/1');
        }
    }

    public function gerir_estudante($dc = FALSE) {
        $dados["url"] = base_url();
        if ($dc == FALSE) {
            $dados["display"] = "none";
        } else {
            $dados['display'] = 'block';
            $dados['cor_alert'] = "success";
            $dados['msg_erro'] = "Relação realizada";
        }
        $dados["data"] = $this->Crud->selecetRelacaoEstudanteDaPesquisa(base_url());
        $dados['acao'] = "RELAÇÃO ESTUDANTE - PESQUISA";
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/tabela_relacao_estudante", $dados, TRUE);
        $this->parser->parse("adm/layout_adm", $dados);
    }

    public function excluir_relacaoestudante($estudante, $pesquisa) {

        if (!$this->Crud->deletaRelacaoEstudante($estudante, $pesquisa)) {
            echo "Erro ao excluir";
        } else {
            $this->gerir_estudante();
        }
    }

    public function relacionar_estudante() {
        $dados["url"] = base_url();
        $dados["display"] = "none";
        if (!$dados["estudantes"] = $this->Crud->select("estudante")) {
            echo "Erro ao pesquisar membros";
        }
        if (!$dados["pesquisas"] = $this->Crud->select("pesquisa")) {
            echo "Erro ao pesquisar pesquisas";
        }
        $dados['acao'] = "RELACIONANDO ESTUDANTE";
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/form_relacionar_estudante", $dados, TRUE);
        $this->parser->parse("adm/layout_adm", $dados);
    }

    public function relacionando_estudante() {
        $insere = $this->input->post();
        if (!$this->Crud->insere("estudante_has_pesquisa", $insere)) {
            echo "Erro ao inserir";
        } else {
            header('Location:' . base_url() . 'gerenciar/relacao/estudantes/1');
        }
    }

    public function excluir_pesquisa($id) {
        $where["id_pesquisa"] = $id;
        if (!$this->Crud->delete("pesquisa", $where)) {
            echo "Erro ao deletar pesquisa";
        } else {
            header('Location:' . base_url() . 'gerenciar/pesquisas/3');
        }
    }

    public function editar_pesquisa($id) {
        $where["id_pesquisa"] = $id;
        if ($consulta = $this->Crud->select("pesquisa", '*', $where)) {
            $dados = $consulta[0];
        } else {
            echo 'Erro ao editar pesquisa';
        }
        $dados["display"] = "none";
        $dados['acao'] = "EDITANDO PESQUISA";
        $dados["url"] = base_url();
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/form_pesquisas_editar", $dados, TRUE);
        $this->parser->parse("adm/layout_adm", $dados);
    }

    public function editando_pesquisa($id) {
        $where["id_pesquisa"] = $id;
        if (!$this->Crud->update("pesquisa", $this->input->post(), $where)) {
            echo "Erro ao editar pesquisa";
        } else {
            header('Location:' . base_url() . 'gerenciar/pesquisas/2');
        }
    }

    public function excluir_pesquisador($id) {
        $where["id_membro"] = $id;
        if (!$this->Crud->delete("membro", $where)) {
            echo "Erro ao deletar pesquisa";
        } else {
            header('Location:' . base_url() . 'gerenciar/pesquisador/3');
        }
    }

    public function editar_pesquisador($id) {
        $where["id_membro"] = $id;
        if ($consulta = $this->Crud->select("membro", '*', $where)) {
            $dados = $consulta[0];
        } else {
            echo 'Erro ao editar pesquisador';
        }
        $dados["display"] = "none";
        $dados["acao"] = "EDITANDO PESQUISADOR";
        $dados["url"] = base_url();
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/form_pesquisador_editar", $dados, TRUE);
        $this->parser->parse("adm/layout_adm", $dados);
    }

    public function editando_pesquisador($id) {
        $where["id_membro"] = $id;
        if (!$this->Crud->update("membro", $this->input->post(), $where)) {
            echo "Erro ao editar pesquisador";
        } else {
            header('Location:' . base_url() . 'gerenciar/pesquisador/2');
        }
    }

    public function excluir_estudante($id) {
        $where["id_estudante"] = $id;
        if (!$this->Crud->delete("estudante", $where)) {
            echo "Erro ao deletar estudante";
        } else {
            header('Location:' . base_url() . 'gerenciar/estudante/3');
        }
    }

    public function editar_estudante($id) {
        $where["id_estudante"] = $id;
        if ($consulta = $this->Crud->select("estudante", '*', $where)) {
            $dados = $consulta[0];
        } else {
            echo 'Erro ao editar estudante';
        }
        $dados["display"] = "none";
        $dados["acao"] = "EDITANDO ESTUDANTE";
        $dados["url"] = base_url();
        $dados["conteudo"] = $this->parser->parse("adm/pesquisa/form_estudante_editar", $dados, TRUE);
        $this->parser->parse("adm/layout_adm", $dados);
    }

    public function editando_estudante($id) {
        $where["id_estudante"] = $id;
        if (!$this->Crud->update("estudante", $this->input->post(), $where)) {
            echo "Erro ao editar estudante";
        } else {
            header('Location:' . base_url() . 'gerenciar/estudante/2');
        }
    }

}
