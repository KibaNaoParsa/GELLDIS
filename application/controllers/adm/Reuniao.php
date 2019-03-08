<?php

class Reuniao extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function gerir_reuniao($id = null) {
        $dados['display'] = 'none';
        $dados['acao'] = "REUNIÕES PÚBLICAS";
        $dados['url'] = base_url();
        $dados['reuniao'] = $this->Crud->select('reuniao', '*');
        foreach ($dados['reuniao'] as $key => $value) {
            $dados['reuniao'][$key]['url'] = base_url();
        }
        if (!empty($id) && $id !== 0) {
            $dados['display'] = 'block';
            $msgs = $this->return_msgs($id);
            $dados['cor_alert'] = $msgs['cor_alert'];
            $dados['msg_erro'] = $msgs['msg_erro'];
        }
        $dados['conteudo'] = $this->parser->parse('adm/reunioes/tabela_reunioes', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function adicionar_reuniao() {
        $dados['display'] = 'none';
        $dados['acao'] = "ADICIONANDO REUNIÃO PÚBLICA";
        $dados['url'] = base_url();
        $form = $this->input->post();
        if (count($form) == 3) {
            $data = $this->security->xss_clean($form);
            $dados['display'] = 'block';
            if ($this->Crud->insere('reuniao', $data)) {
                $dados['cor_alert'] = 'success';
                $dados['msg_erro'] = 'Inserido com sucesso!';
            } else {
                $dados['cor_alert'] = 'danger';
                $dados['msg_erro'] = 'Erro ao inserir, tente novamente!';
            }
            unset($form);
        }
        $dados['conteudo'] = $this->parser->parse('adm/reunioes/adicionar_reuniao', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function editar_reuniao($id_reuniao = null) {
        if (!$id_reuniao) {
            redirect('gerenciar/reuniao/0');
        }
        $dados['display'] = 'none';
        $dados['acao'] = "EDITANDO REUNIÃO PÚBLICA";
        $dados['url'] = base_url();
        $dados['reuniao'] = $this->return_records_reuniao($id_reuniao);
        $where['id_reuniao'] = $id_reuniao;
        $form = $this->input->post();
        if (count($form) == 3) {
            if ($this->Crud->update('reuniao', $form, $where)) {
                $dados['cor_alert'] = 'success';
                $dados['msg_erro'] = 'Atualizado com sucesso!';
                $dados['reuniao'] = $this->return_records_reuniao($id_reuniao);
            } else {
                $dados['cor_alert'] = 'danger';
                $dados['msg_erro'] = 'Erro ao atualizar, tente novamente!';
            }
            $dados['display'] = 'block';
        }
        $dados['conteudo'] = $this->parser->parse('adm/reunioes/editar_reuniao', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function excluir_reuniao($id_reuniao = null) {
        if (!$id_reuniao) {
            redirect('gerenciar/reuniao/0');
        }
        $where['id_reuniao'] = $id_reuniao;
        if ($this->Crud->delete('reuniao', $where)) {
            redirect('gerenciar/reuniao/1');
        } else {
            redirect('gerenciar/reuniao/2');
        }
    }

    private function return_records_reuniao($id) {
        $records = $this->Crud->select('reuniao', '*', ['id_reuniao' => $id]);
        foreach ($records as $key => $value) {
            $records[$key]['url'] = base_url();
        }
        return $records;
    }
    
    private function return_records_reuniaopr($id) {
        $records = $this->Crud->select('reuniaoprivada', '*', ['id_reuniao' => $id]);
        foreach ($records as $key => $value) {
            $records[$key]['url'] = base_url();
        }
        return $records;
    }

    private function return_msgs($id) {
        switch ($id) {
            case 1:
                $dados['cor_alert'] = 'success';
                $dados['msg_erro'] = 'Excluído com sucesso!';
                break;
            case 2:
                $dados['cor_alert'] = 'danger';
                $dados['msg_erro'] = 'Erro ao excluir, tente novamente!';
                break;
        }
        return $dados;
    }
    
    //abaixo as reuniões privadas
    
    public function gerir_reuniaopr($id = null) {
        $dados['display'] = 'none';
        $dados['acao'] = "REUNIÕES PRIVADAS";
        $dados['url'] = base_url();
        $dados['reuniao'] = $this->Crud->select('reuniaoprivada', '*');
        foreach ($dados['reuniao'] as $key => $value) {
            $dados['reuniao'][$key]['url'] = base_url();
        }
        if (!empty($id) && $id !== 0) {
            $dados['display'] = 'block';
            $msgs = $this->return_msgs($id);
            $dados['cor_alert'] = $msgs['cor_alert'];
            $dados['msg_erro'] = $msgs['msg_erro'];
        }
        $dados['conteudo'] = $this->parser->parse('adm/reunioes/tabela_reunioespr', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }
    
    public function adicionar_reuniaopr() {
        $dados['display'] = 'none';
        $dados['acao'] = "ADICIONANDO REUNIÃO PRIVADA";
        $dados['url'] = base_url();
        $form = $this->input->post();
        if (count($form) == 3) {
            $data = $this->security->xss_clean($form);
            $dados['display'] = 'block';
            if ($this->Crud->insere('reuniaoprivada', $data)) {
                $dados['cor_alert'] = 'success';
                $dados['msg_erro'] = 'Inserido com sucesso!';
            } else {
                $dados['cor_alert'] = 'danger';
                $dados['msg_erro'] = 'Erro ao inserir, tente novamente!';
            }
            unset($form);
        }
        $dados['conteudo'] = $this->parser->parse('adm/reunioes/adicionar_reuniaopr', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }
    
    public function editar_reuniaopr($id_reuniao = null) {
        if (!$id_reuniao) {
            redirect('gerenciar/reuniaopr/0');
        }
        $dados['display'] = 'none';
        $dados['acao'] = "EDITANDO REUNIÃO PRIVADA";
        $dados['url'] = base_url();
        $dados['reuniao'] = $this->return_records_reuniaopr($id_reuniao);
        $where['id_reuniao'] = $id_reuniao;
        $form = $this->input->post();
        if (count($form) == 3) {
            if ($this->Crud->update('reuniaoprivada', $form, $where)) {
                $dados['cor_alert'] = 'success';
                $dados['msg_erro'] = 'Atualizado com sucesso!';
                $dados['reuniao'] = $this->return_records_reuniaopr($id_reuniao);
            } else {
                $dados['cor_alert'] = 'danger';
                $dados['msg_erro'] = 'Erro ao atualizar, tente novamente!';
            }
            $dados['display'] = 'block';
        }
        $dados['conteudo'] = $this->parser->parse('adm/reunioes/editar_reuniaopr', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }
    
    public function excluir_reuniaopr($id_reuniao = null) {
        if (!$id_reuniao) {
            redirect('gerenciar/reuniaopr/0');
        }
        $where['id_reuniao'] = $id_reuniao;
        if ($this->Crud->delete('reuniaoprivada', $where)) {
            redirect('gerenciar/reuniaopr/1');
        } else {
            redirect('gerenciar/reuniaopr/2');
        }
    }

}
