<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricao extends CI_Controller {

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
    


    public function efetuar_inscricao() {
    	
    	
			/*
			
			Tópicos para esse trecho:
			
			1. Consultar o banco de dados para conferir o número de inscritos. (40 máx., 34 ouvintes, 6 palestrantes)
				1.1. Se OK, prosseguir.
				1.2. Caso contrário, mostrar mensagem de erro na tela.
			2. Depois de 1.1, puxar os dados informados no controller para cadastro. Conferir duplicidade no CPF.
				2.1. Se OK, prosseguir.
				2.2. Caso contrário, mostrar mensagem de erro, retornando o usuário para a janela.
			3. Depois de 2.1, conferir o tipo de inscrito. 			
				3.1. Caso ouvinte, fazer a inscrição e enviar o e-mail de confirmação.
				3.2. Caso palestrante, redirecionar para a janela de título/trabalho.
				
			*/			
			
			$dados = $this->menu;						
	      $dados['url'] = base_url();
   	   $dados['display'] = 'none';
		
			$form = $this->input->post();
			$data['NOME'] = $form['txt_nome'];	 
			$data['CPF'] = $form['txt_cpf'];
			$data['EMAIL'] = $form['txt_email'];
			$data['INSTITUICAO'] = $form['txt_instituicao'];
			$data['TIPO'] = $form['tipo'];
			$data['idEVENTO'] = $form['evento'];
			
			$dados['NOME'] = $data['NOME'];	 
			$dados['CPF'] = $data['CPF'];
			$dados['EMAIL'] = $data['EMAIL'];
			$dados['INSTITUICAO'] = $data['INSTITUICAO'];
			$dados['TIPO'] = $data['TIPO'];
			$dados['idEVENTO'] = $data['idEVENTO'];			
					
			// O código verá se já existe algum CPF idêntico cadastrado
			
			$this->db->select("INSCRITO.idINSCRITO");
			$this->db->from("INSCRITO");
			$this->db->where("INSCRITO.cpf", $data['CPF']);
			$conf = $this->db->get()->result();
			
			if(count($conf) > 0) {

				// Caso o CPF esteja duplicado, a mensagem de erro será exibida.
				
				echo '<script type="text/javascript">confirm("O CPF informado já foi cadastrado.");</script>';	
				$this->index();		

			} 	else {		
			
				// Prosseguindo caso tudo esteja OK.
				
				$this->db->select("EVENTO.numouvintes, EVENTO.numtrabalhos, EVENTO.numtotal");
				$this->db->from("EVENTO");
				$this->db->where("EVENTO.idEVENTO", $data['idEVENTO']);				
				$total = $this->db->get()->result();
				
				if($data['TIPO'] == 0) {

					// Aqui, o código conferirá se ainda existe alguma vaga em dado evento.
					
					foreach ($total as $t) {
						if ($t->numouvintes < 34) {
						
							$data['SITUACAO'] = 2; // Situação 2 = DEFERIDO SEM PAGAMENTO
														
							$this->db->insert('INSCRITO', $data);
							
							$dat['numouvintes'] = $t->numouvintes;
							$dat['numouvintes'] += 1; // +1 para a contagem de ouvintes.
							$dat['numtotal'] = $t->numtotal;
							$dat['numtotal'] += 1; // +1 para a contagem total.
							
							$this->db->where('EVENTO.idEVENTO', $data['idEVENTO']);
							$this->db->update('EVENTO', $dat); // Atualizando mudanças no BD.

							echo '<script type="text/javascript">confirm("O cadastro foi efetuado com sucesso!");</script>';	
							redirect('inicio'); // Consertar essa linha.
							
							// PARA FAZER: Enviar e-mail de confirmação
							
						
						} else {
						
							$data['SITUACAO'] = 1; // Situação 1 = INDEFERIDO
							
							$this->db->insert('INSCRITO', $data);
													
							echo '<script type="text/javascript">confirm("O limite de cadastros já foi atingido!");</script>';	
							redirect('inicio'); // Consertar essa linha.
							
							// PARA FAZER: Enviar e-mail de indeferimento
						}					
					}
				
				} else if ($data['TIPO'] == 1) {
					
					// PARA FAZER: Caso o inscrito seja um palestrante, o código irá direcioná-lo para digitar seu título e artigo.					
											
					$this->db->select("EVENTO.NOME");
					$this->db->from("EVENTO");
					$this->db->where("EVENTO.idEVENTO", $data['idEVENTO']);
					
					$vnome = $this->db->get()->result();
					foreach ($vnome as $v) {
						$dados['NOME_EVENTO'] = $v->NOME;					
					}					
					
					$this->parser->parse("inscricao/inscricao_artigo", $dados);
					
				}				
		
			}
    }
    
    public function inscricao_artigo() {
			
			$dados = $this->menu;						
	      $dados['url'] = base_url();
   	   $dados['display'] = 'none';
			
			
			$form = $this->input->post();
			$data['NOME'] = $form['nome'];	 
			$data['CPF'] = $form['cpf'];
			$data['EMAIL'] = $form['email'];
			$data['INSTITUICAO'] = $form['instituicao'];
			$data['idEVENTO'] = $form['idEVENTO'];
			$data['TITULO'] = $form['titulo'];
			$data['ARTIGO'] = $form['artigo'];    
			$data['TIPO'] = 1;
    
    		$this->db->select("EVENTO.numtrabalhos, EVENTO.numtotal");
    		$this->db->from("EVENTO");
    		$this->db->where("EVENTO.idEVENTO", $data['idEVENTO']);
    		$total = $this->db->get()->result();
    		
			//echo $data['NOME']."-".$data['INSTITUICAO']."-".$data['CPF'].'-'.$data['EMAIL'].'-'.$data['idEVENTO'].'-'.$data['TIPO'];    		
    		
    		foreach ($total as $t) {
				if ($t->numtrabalhos < 6) {
				
					$data['SITUACAO'] = 3;
					
					$this->db->insert('INSCRITO', $data);
					
					$dat['numtrabalhos'] = $t->numtrabalhos;
					$dat['numtrabalhos'] += 1;
					$dat['numtotal'] = $t->numtotal;
					$dat['numtotal'] += 1;
					
					$this->db->where('EVENTO.idEVENTO', $data['idEVENTO']);
					$this->db->update('EVENTO', $dat);				

					echo '<script type="text/javascript">confirm("O cadastro foi efetuado com sucesso!");</script>';	
					redirect('inicio'); // Consertar essa linha.
					
					// PARA FAZER: Enviar e-mail de confirmação					

				} else {
					$data['SITUACAO'] = 1;
							
					$this->db->insert('INSCRITO', $data);					
						
					echo '<script type="text/javascript">confirm("O limite de cadastros já foi atingido.");</script>';	
					redirect('inicio'); // Consertar essa linha.
							
					// PARA FAZER: Mandar e-mail de limite						
				
				}    		
    		}
    }

}

