<?php

defined('BASEPATH') or exit('Sai daqui seu cachorro');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function gerenciar_usuarios($id = null) {
        $dados['url'] = base_url();
        $dados['display'] = 'none';
        $dados['usuario'] = $this->Crud->select('usuario', '*');
        foreach ($dados['usuario'] as $key => $value) {
            $dados['usuario'][$key]['url'] = base_url();
        }
        if (!empty($id) && $id !== 0) {
            $dados['display'] = 'block';
            $msgs = $this->return_msgs($id);
            $dados['cor_alert'] = $msgs['cor_alert'];
            $dados['msg_erro'] = $msgs['msg_erro'];
        }
        $dados['acao'] = "USUÁRIOS";
        $dados['conteudo'] = $this->parser->parse('adm/usuarios/tabela_usuarios', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function adicionar_usuarios() {
        $dados['display'] = 'none';
        $dados['acao'] = "ADICIONANDO USUÁRIO";
        $dados['url'] = base_url();
        $form = $this->input->post();
        if (count($form) == 4) {
            $data = $this->security->xss_clean($form);
            if ($form['senha'] == $form['rep_senha']) {
                $data['senha'] = sha1($form['senha']);
                unset($data['rep_senha']);
                if ($this->Crud->insere('usuario', $data)) {
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
            } else {
                $dados['display'] = 'block';
                $dados['msg_erro'] = 'As senhas não se coincidem.';
                $dados['cor_alert'] = 'danger';
                unset($form);
            }
        }
        $dados['conteudo'] = $this->parser->parse('adm/usuarios/adicionar_usuario', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function editar_usuario($id_usuario = null) {
        $dados['url'] = base_url();
        $dados['display'] = 'none';
        $dados['acao'] = "EDITANDO USUÁRIO";
        $where['id_usuario'] = $id_usuario;
        $errors = false;
        $dados['usuario'] = $this->get_records_usuario_edit($id_usuario);
        $form = $this->input->post();
        if (count($form) > 0) {
            $data = $this->security->xss_clean($form);
            if (!empty($form['senha']) && !empty($form['rep_senha'])) {
                if ($form['senha'] == $form['rep_senha']) {
                    $data['senha'] = sha1($data['senha']);
                    unset($data['rep_senha']);
                } else {
                    $errors = true;
                    $dados['cor_alert'] = 'danger';
                    $dados['msg_erro'] = 'As senhas não se coincidem.';
                    unset($data['rep_senha']);
                    $dados['display'] = 'block';
                }
            } else {
                if ((empty($form['senha']) && !empty($form['rep_senha'])) || (!empty($form['senha'])) && empty($form['rep_senha'])) {
                    $errors = true;
                    $dados['cor_alert'] = 'danger';
                    $dados['msg_erro'] = 'É necessário preencher o repetir senha também.';
                    unset($data['rep_senha']);
                }
                $dados['display'] = 'block';
            }
            if (!$errors) {
                if ($this->Crud->update('usuario', $data, $where)) {
                    $dados['cor_alert'] = 'success';
                    $dados['msg_erro'] = 'Atualizado com sucesso!';
                    $dados['usuario'] = $this->get_records_usuario_edit($id_usuario);
                } else {
                    $dados['cor_alert'] = 'danger';
                    $dados['msg_erro'] = 'Erro ao atualizar, tente novamente!';
                }
                $dados['display'] = 'block';
            }
        }

        $dados['conteudo'] = $this->parser->parse('adm/usuarios/editar_usuario', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
    }

    public function excluir_usuario($id_usuario = null) {
        if (!$id_usuario) {
            redirect('gerenciar/usuarios/0');
        }
        $data['id_usuario'] = $id_usuario;
        if ($this->Crud->delete('usuario', $data)) {
            redirect('gerenciar/usuarios/1');
        } else {
            redirect('gerenciar/usuarios/2');
        }
    }

    private function get_records_usuario_edit($id_usuario) {
        $where['id_usuario'] = $id_usuario;
        $records = $this->Crud->select('usuario', '*', $where);
        foreach ($records as $key => $value) {
            $dados[$key]['id_usuario'] = $value['id_usuario'];
            $dados[$key]['nome'] = $value['nome'];
            $dados[$key]['email'] = $value['email'];
            $dados[$key]['url'] = base_url();
        }
        return $dados;
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
	
	public function perfil(){
		$dados['url'] = base_url();
		$dados['acao'] = 'PERFIL';
		$dados['display'] = 'none';
		$dados['msg_erro'] = '';
		$form = $this->input->post();
		if(count($form) > 0 ){
			if($form['password'] !== $form['rep_password']){
				$dados['display'] = 'block';
				$dados['msg_erro'] = 'As senhas são diferentes.';
				$dados['cor_alert'] = 'danger';
			}else{
				$data['senha'] = sha1($form['password']);
				$id_usuario['id_usuario'] = $this->session->userdata('id_usuario');
				if($this->Crud->update('usuario', $data, $id_usuario)){
					$dados['display'] = 'block';
					$dados['msg_erro'] = 'Senha atualizada com sucesso!';
					$dados['cor_alert'] = 'success';
				}else{
					$dados['display'] = 'block';
					$dados['msg_erro'] = 'Ocorreu um erro, contate o administrador do sistema.';
					$dados['cor_alert'] = 'danger';
				}
			}
		}
		$dados['conteudo'] = $this->parser->parse('adm/usuarios/perfil', $dados, TRUE);
        $this->parser->parse('adm/layout_adm', $dados);
	}
}
