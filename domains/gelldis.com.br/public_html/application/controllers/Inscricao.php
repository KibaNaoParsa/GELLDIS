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
        $this->parser->parse('inscricao', $dados);
    }

}

