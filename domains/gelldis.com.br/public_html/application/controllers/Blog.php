<?php

defined('BASEPATH') or exit('Sai daqui seu cachorro');

class Blog extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        $dados['url'] = base_url();
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function ultimos_eventos($n = 3) {
        $dados['url'] = base_url();
        $dados['area'] = "Eventos realizados";
        $dados['acessoAdm'] = $this->retorna_acesso();
        $dados['ene'] = $n + 3;
        $dados["noticias"] = $this->Crud->selectPaginacaoNoticias($n);
        foreach ($dados["noticias"] as $key => $value) {
            $dados["noticias"][$key]["texto"] = substr(strip_tags($dados["noticias"][$key]["texto"]), 0, 150);
            $dados["noticias"][$key]["url"] = base_url();
        }
        $dados["conteudo"] = $this->parser->parse("frags/resumo_noticia", $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function ver_evento($id_evento) {
        $dados['url'] = base_url();
        $dados['area'] = "Últimos eventos";
        $dados['acessoAdm'] = $this->retorna_acesso();
        $where["id_eventos_participados"] = $id_evento;
        if (!$noticia["noticia"] = $this->Crud->select("eventos_participados", '*', $where)) {
            echo "<h1>Notícia inexistente</h1>";
        }
        foreach ($noticia['noticia'] as $key => $value) {
            $noticia['noticia'][$key]['data_eventos_participados'] = date("d/m/Y", strtotime($value['data_eventos_participados']));
        }

        if (!$noticia["imagens"] = $this->Crud->select4imagens($id_evento, base_url())) {
            $noticia["imagens"] = array();
        }
        $noticia["url"] = $dados["url"];
        $noticia["id_evento"] = $id_evento;
        $dados["conteudo"] = $this->parser->parse("frags/noticia", $noticia, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function ver_galeria($id_evento) {
        $dados['url'] = base_url();
        $dados['area'] = "Últimos eventos";
        $dados['acessoAdm'] = $this->retorna_acesso();
        $dados['id_evento'] = $id_evento;
        $dados['msg_enough'] = '';
        $where["id_evento_fk"] = $id_evento;
        $dados["imagens"] = $this->Crud->select("imagem", '*', $where);
        foreach ($dados["imagens"] as $key => $value) {
            $dados["imagens"][$key]["url"] = $dados["url"];
        }
        if (count($dados['imagens']) == 0) {
            $dados['msg_enough'] = 'Não há nenhuma imagem cadastrada.';
        }
        $dados["conteudo"] = $this->parser->parse("frags/galeria", $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }
    
    public function retorna_acesso(){
        if (empty($this->session->get_userdata()["id_usuario"])) {
            return 'data-toggle="modal" data-target="#modal_login_moderador"';
        } else {
            return 'href="' . base_url() . 'Restrita" role="button"';
        }
    }

    public function proximas_reunioes($n = 3) {
        $dados['url'] = base_url();
        $dados['ene'] = $n + 3;
        $dados['reunioes'] = $this->Crud->selectPaginacaoReunioes($n);
        if (empty($this->session->get_userdata()["id_usuario"])) {
            $dados['area'] = "Próximas reuniões &nbsp&nbsp&nbsp" . '<a class="btn btn-primary"  data-toggle="modal" data-target="#modal_login_moderador" >Acesso restrito</a>';
        } else {
            $dados['area'] = "Próximas reuniões &nbsp&nbsp&nbsp" . '<a class="btn btn-primary" href="' . base_url() . 'blog/reunioespr/3" role="button">Acesso restrito</a>';
        }
        $dados['acessoAdm'] = $this->retorna_acesso();
        foreach ($dados['reunioes'] as $key => $value) {
            $dados['reunioes'][$key]['url'] = base_url();
            $dados['reunioes'][$key]['texto'] = substr($value['texto'], 0, 120);
        }
        $dados['conteudo'] = $this->parser->parse('frags/reunioes', $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function proximas_reunioespr($n = 3) {
        $dados['url'] = base_url();
        $dados['ene'] = $n + 3;
        $dados['reunioes'] = $this->Crud->selectPaginacaoReunioespr($n);
        $dados['acessoAdm'] = $this->retorna_acesso();
        $dados['area'] = "Próximas reuniões privadas &nbsp&nbsp" . '<a class="btn btn-primary" href="' . base_url() . 'blog/reunioes/3" role="b//utton">Reuniões públicas</a>';
        ;        
        foreach ($dados['reunioes'] as $key => $value) {
            $dados['reunioes'][$key]['url'] = base_url();
            $dados['reunioes'][$key]['texto'] = substr($value['texto'], 0, 120);
        }
        $dados['conteudo'] = $this->parser->parse('frags/reunioespr', $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function ver_reuniao($id_reuniao) {
        $dados['url'] = base_url();
        $where['id_reuniao'] = $id_reuniao;
        $dados['area'] = "Próximas reuniões";
        $dados['acessoAdm'] = $this->retorna_acesso();
        $dados['reuniao'] = $this->Crud->select('reuniao', '*', $where);
        foreach ($dados['reuniao'] as $key => $value) {
            $dados['reuniao'][$key]['url'] = base_url();
            $dados['reuniao'][$key]['data'] = date("d/m/Y", strtotime($value['data']));
        }
        $dados['conteudo'] = $this->parser->parse('frags/reuniao', $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function ver_reuniaopr($id_reuniao) {
        $dados['url'] = base_url();
        $where['id_reuniao'] = $id_reuniao;
        $dados['area'] = "Próximas reuniões";
        $dados['acessoAdm'] = $this->retorna_acesso();
        $dados['reuniao'] = $this->Crud->select('reuniaoprivada', '*', $where);
        foreach ($dados['reuniao'] as $key => $value) {
            $dados['reuniao'][$key]['url'] = base_url();
            $dados['reuniao'][$key]['data'] = date("d/m/Y", strtotime($value['data']));
        }
        $dados['conteudo'] = $this->parser->parse('frags/reuniaopr', $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function proximos_eventos($n = 3) {
        $dados['url'] = base_url();
        $dados['area'] = "Próximos eventos";
        $dados['acessoAdm'] = $this->retorna_acesso();
        $dados['ene'] = $n + 3;
        $dados['agenda'] = $this->Crud->selectPaginacaoProxEventos($n);
        foreach ($dados['agenda'] as $key => $value) {
            $dados['agenda'][$key]['url'] = base_url();
            $dados['agenda'][$key]['texto'] = substr($value['texto'], 0, 120);
            $dados['agenda'][$key]['tipo_evento'] = $value['tipo_evento'] == 0 ? "Simpósio" : "Outros";
        }
        $dados['conteudo'] = $this->parser->parse('frags/resumo_prox_eventos', $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function ver_prox_evento($id_evento) {
        $dados['url'] = base_url();
        $dados['area'] = "Próximos eventos";
        $dados['acessoAdm'] = $this->retorna_acesso();
        $where['id_agenda'] = $id_evento;
        $dados['agenda'] = $this->Crud->select('agenda', '*', $where);
        foreach ($dados['agenda'] as $key => $value) {
            $dados['agenda'][$key]['url'] = base_url();
            $dados['agenda'][$key]['data'] = date('d/m/Y', strtotime($value['data']));
            $dados['agenda'][$key]['tipo_evento'] = $value['tipo_evento'] == 0 ? "Simpósio" : "Outros";
        }
        $dados['conteudo'] = $this->parser->parse('frags/prox_evento', $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function ver_pesquisas() {
        $dados['url'] = base_url();
        $dados['area'] = "Linhas de pesquisa";
        $dados['acessoAdm'] = $this->retorna_acesso();
        $dados['pesquisas'] = $this->Crud->select('pesquisa');
        foreach ($dados['pesquisas'] as $key => $value) {
            $dados['pesquisas'][$key]['url'] = base_url();
        }
        $dados['conteudo'] = $this->parser->parse('frags/pesquisas', $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function ver_pesquisa($id) {
        $where["id_pesquisa"] = $id;
        $dados = $this->Crud->select('pesquisa', '*', $where)[0];
        $dados["pesquisadores"] = $this->Crud->selecetMembrosDaPesquisa($id);
        foreach ($dados['pesquisadores'] as $key => $value) {
            $dados['pesquisadores'][$key]['data_inclusao'] = date('d/m/Y', strtotime($value['data_inclusao']));
        }
        $dados["estudantes"] = $this->Crud->selecetEstudantessDaPesquisa($id);
        foreach ($dados['estudantes'] as $key => $value) {
            $dados['estudantes'][$key]['data_inclusao'] = date('d/m/Y', strtotime($value['data_inclusao']));
        }
        $dados['url'] = base_url();
        $dados['area'] = "Linhas de pesquisa";
        $dados['acessoAdm'] = $this->retorna_acesso();
        $dados['conteudo'] = $this->parser->parse('frags/pesquisa', $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

    public function Revista() {
        $dados['url'] = base_url();
        $dados['area'] = '';
        $dados['acessoAdm'] = $this->retorna_acesso();
        $dados['conteudo'] = $this->parser->parse('frags/revista', $dados, TRUE);
        $this->parser->parse('blog/layout_blog', $dados);
    }

}
