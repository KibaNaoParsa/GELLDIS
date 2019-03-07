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
        if (isset($number) && $number == 1) {
            $dados['color'] = 'success';
            $dados['msg'] = 'Logado com sucesso!, agora pode acessar a área administrativa';
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
