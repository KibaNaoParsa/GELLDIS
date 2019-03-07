<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function gerir_agenda($id = null) {
        $dados['url'] = base_url();
        $dados['display'] = 'none';
        $dados['acao'] = "AGENDA DE EVENTOS";
        $records = $this->Crud->select('agenda');
        $dados['agenda'] = array();
        if (count($records) != 0) {
            foreach ($records as $key => $value) {
                $dados['agenda'][$key]['titulo'] = substr($value['titulo'], 0, 60) . ' [...]';
                $dados['agenda'][$key]['id_agenda'] = $value['id_agenda'];
                $dados['agenda'][$key]['url'] = base_url();
            }
        }
        if (!empty($id) && $id !== 0) {
            $dados['display'] = 'block';
            $msgs = $this->return_msgs($id);
            $dados['cor_alert'] = $msgs['cor_alert'];
            $dados['msg_erro'] = $msgs['msg_erro'];
        }
        $dados['conteudo_agenda'] = $this->parser->parse('adm/gerir_agenda/tabela_agenda', $dados, TRUE);
        $dados['conteudo'] = $this->parser->parse('adm/gerir_agenda/visualizar_gerenciar_agenda', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function adicionar_agenda() {
        $dados['display'] = 'none';
        $dados['url'] = base_url();
        $dados['acao'] = "ADICIONANDO EVENTO";
        $form = $this->input->post();
        if (count($form) == 4) {
            $data = $this->security->xss_clean($form);
            if ($this->Crud->insere('agenda', $data)) {
                $dados['display'] = 'block';
                $dados['msg_erro'] = 'Inserido com sucesso!';
                $dados['cor_alert'] = 'success';
                unset($form);
            } else {
                $dados['display'] = 'block';
                $dados['msg_erro'] = 'Ocorreu um erro ao inserir, tente novamente!';
                $dados['cor_alert'] = 'danger';
                unset($form);
            }
        }
        $dados['conteudo'] = $this->parser->parse('adm/gerir_agenda/adicionar_agenda', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function editar_agenda($id_agenda = null) {
        if (!$id_agenda) {
            redirect('gerenciar/agenda/0');
        }
        $dados['url'] = base_url();
        $dados['display'] = 'none';
        $dados['acao'] = "Editando evento";
        $where['id_agenda'] = $id_agenda;
        $dados['agenda'] = $this->get_records_agenda_edit($id_agenda);
        $form = $this->input->post();
        if (count($form) > 0) {
            $data = $this->security->xss_clean($form);
            if ($this->Crud->update('agenda', $data, $where)) {
                $dados['cor_alert'] = 'success';
                $dados['msg_erro'] = 'Atualizado com sucesso!';
                $dados['agenda'] = $this->get_records_agenda_edit($id_agenda);
            } else {
                $dados['cor_alert'] = 'danger';
                $dados['msg_erro'] = 'Erro ao atualizar, tente novamente!';
            }
            $dados['display'] = 'block';
        }

        $dados['conteudo'] = $this->parser->parse('adm/gerir_agenda/editar_agenda', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    private function get_records_agenda_edit($id_agenda) {
        $where['id_agenda'] = $id_agenda;
        $records = $this->Crud->select('agenda', '*', $where);
        foreach ($records as $key => $value) {
            $dados[$key]['id_agenda'] = $value['id_agenda'];
            $dados[$key]['titulo'] = $value['titulo'];
            $dados[$key]['texto'] = $value['texto'];
            $dados[$key]['data'] = $value['data'];
            $dados[$key]['url'] = base_url();
        }
        return $dados;
    }

    public function excluir_agenda($id_agenda = null) {
        if (!$id_agenda) {
            redirect('gerenciar/agenda/0');
        }
        $data['id_agenda'] = $id_agenda;
        if ($this->Crud->delete('agenda', $data)) {
            redirect('gerenciar/agenda/1');
        } else {
            redirect('gerenciar/agenda/2');
        }
    }

    private function return_msgs($id) {
        switch ($id) {
            case 1:
                $dados['msg_erro'] = 'Apagado com sucesso!';
                $dados['cor_alert'] = 'success';
                break;
            case 2:
                $dados['msg_erro'] = 'Erro ao apagar, tente novamente!';
                $dados['cor_alert'] = 'danger';
                break;
        }
        return $dados;
    }

}
