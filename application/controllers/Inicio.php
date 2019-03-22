<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    private $menu;

    public function __construct() {
        parent::__construct();
        $this->load->database();

        if (!$this->session->userdata('email')) {
            $this->menu = [
                'modal_link' => 'modal_login_moderador',
                'modal' => 'modal',
                'link_logado' => '#'
            ];
        } else {
            $this->menu = [
                'modal_link' => '',
                'modal' => '#',
                'link_logado' => 'Restrita/'
            ];
        }
    }

    public function index($number = null) {
		
        $dados = $this->menu;
        $dados['url'] = base_url();
        $dados['display'] = 'none';

    	  $this->db->select("EVENTO.idEVENTO, EVENTO.NOME");
		  $this->db->from("EVENTO");
		  $dados['EVENTO'] = $this->db->get()->result();

        if (isset($number) && $number == 1) {
            $dados['color'] = 'success';
            $dados['msg'] = 'Logado com sucesso!, agora pode acessar a área administrativa';
            $dados['display'] = 'block';
        } else if (isset($number) && $number == 2) {
            $dados['color'] = 'danger';
            $dados['msg'] = 'O CPF informado já foi cadastrado.';
	     		$dados['display'] = 'block';
        } else if (isset($number) && $number == 3) {
            $dados['color'] = 'danger';
            $dados['msg'] = 'As vagas para esse GT já foram preenchidas. Fique atento(a) ao seu e-mail para qualquer novidade.';
            $dados['display'] = 'block';
        } else if (isset($number) && $number == 4) {
            $dados['color'] = 'danger';
            $dados['msg'] = 'Não foi possível confirmar o cadastro. Confira as informações digitadas.';
            $dados['display'] = 'block';
        }
        $this->parser->parse('layout_inicio', $dados);
    }

    public function login() {
        $dados = $this->menu;
        $dados['url'] = base_url();
        $form = $this->input->post();
        if (count($form) == 2) {
            $email['email'] = $form['email'];
            $form['senha'] = sha1($form['senha']);
            $data = $this->Crud->select('usuario', '*', $email);
            if (count($data) == 1 && $data[0]['senha'] == $form['senha']) {
                $this->session->set_userdata($data[0]);
                redirect('Inicio/index/1');
            } else {
                $dados['msg'] = 'Usuário e/ou senha incorretos.';
                $dados['display'] = 'block';
                $dados['color'] = 'danger';
            }
        }
        $this->parser->parse('layout_inicio', $dados);
    }

}
