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

	public function gerar_pdf() {
		require('assets/fpdf/fpdf.php');
		htmlspecialchars_decode($string, ENT_QUOTES);
		
		$pdf = new FPDF();
		
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->MultiCell(170, 10, "GT - Métodos e práticas com foco na pedagogia dos multiletramentos no contexto de ensino");
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, "Profa. Dra. Flaviane Faria Carvalho - UNIFAL Campus Alfenas");
		
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		$pdf->MultiCell(180, 10, 'A proliferação das novas mídias digitais na vida social tem provocado efeitos substanciais sobre como nos comunicamos, produzimos significado e percebemos o mundo. Esse novo cenário acena para a necessidade de educadores adotarem novos métodos e práticas de leitura e produção de textos de forma mais ampla e integrada em sala de aula, contemplando diferentes modalidades de linguagem, tais como a imagem (estática ou em movimento) e a música. Para atender a essa demanda, linguistas e educadores associados ao The New London Group têm desenvolvido, desde a década de 90, construtos teórico-metodológicos com a finalidade de oportunizar a pedagogia dos multiletramentos - digital, visual, gestual, sonoro, entre outros - no cotidiano escolar. Sob esse viés, o eixo temático ora proposto, "Métodos e práticas com foco na pedagogia dos multiletramentos no contexto de ensino", visa compartilhar reflexões e experiências associadas à prática dos Multiletramentos no âmbito da Educação Básica, promovendo assim o diálogo e o entrelaçamento teórico com outras áreas do conhecimento.');
		
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->MultiCell(170, 10, "GT - Multiletramento e multimodalidade sob o olhar da Linguística");
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, "Profa. Dra. Lilian Arão - CEFET-MG Belo Horizonte");
		
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		$pdf->MultiCell(180, 10, 'No momento em que as tecnologias se posicionam majoritariamente em todos os contextos da vida cotidiana, tratar o texto em toda sua profundidade, no que tange à forma e ao conteúdo, bem como à sua circulação e produção, tornam-se relevantes as discussões e reflexões sobre multimodalidade e multiletramento nas práticas escolares e também sociais. Este GT propõe-se a discutir trabalhos, pesquisas e relatos, concluídos ou em andamento, que enfatizem as perspectivas multimodais de textos, na atualidade, bem como os múltiplos letramentos que emergem das situações de uso e produção, nesta contemporaneidade.
');
		
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->MultiCell(170, 10, "GT - Literatura, ensino e múltiplos limites");
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, "Prof. Dr. Erick Gontiljo Costa - CEFET-MG Varginha");
		
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		$pdf->MultiCell(180, 10, 'O texto literário, sobretudo em contexto de produção moderno e contemporâneo, não tem necessariamente a legibilidade e a "clareza de sentido" como traços constitutivos. Entretanto, em contexto escolar, o sentido tende a ser o aspecto textual privilegiado por leitores e, não raramente, por docentes. Há, por exemplo, autores importantes no campo da educação que defendem a necessidade de ensino da leitura literária, prioritariamente, pelo viés do sentido. Propõe-se que o GT sobre literatura e ensino seja um espaço de diálogo a respeito das questões relativas aos processos de significação e seus limites, nos textos poéticos de diversos gêneros, considerando-se os contextos de ensino escolar e universitário. ');
		
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->MultiCell(170, 10, "GT - Multimodalidade, Multiletramentos e Tecnologias - TECNOPOÉTICAS: ARTES, CRIAÇÃO E CRÍTICA");
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, "Prof. Dr. Rogério Barbosa - CEFET-MG Belo Horizonte");
		
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		$pdf->MultiCell(180, 10, 'Dado a presença cada vez maior das diversas mídias tanto no processo como produto das criações artísticas, o presente GT busca discutir essas relações entre artes e mídias, com especial enfoque para as criações no campo da tecnologia digital e para trabalhos que tratem da imagem em relação com as tecnologias mecânicas (século XIX), eletrônicas e digitais (século XX e XXI). Nesse sentido, propõe-se reflexões  em torno de produções que enfatizem relações entre literatura, imagem (animada ou pictural) e tecnologias, poesia eletrônica, literatura digital, edição e tecnologia e outras poéticas tecnológicas.');
		
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->MultiCell(170, 10, "GT - Linguagens, arte, política: leitura(s) de mundo");
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(180, 10, "Profa. Dra. Cilene M. Pereira - UNINCOR - MG Campus Três Corações");
		
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		$pdf->MultiCell(180, 10, 'O conceito de Multiletramentos, cunhado pelo Grupo de Nova Londres, formado por Linguísticas e Educadores, aponta para uma concepção de mundo aberta à multiplicidade, que compreende a existência de diversos canais de comunicação e de mídia e se pauta pela diversidade linguística e cultural. (Cf. CAZDEN, COPE et al., 1996, p. 63). Pensar a leitura, como prática social, implica, nesse caso, em um entendimento mais amplo do ato de ler, que envolve e articula modalidades distintas de linguagem, como a imagem (estática ou em movimento) e a música, por exemplo. Partindo dessa perspectiva, o eixo temático aqui proposto, "Linguagens, arte, política: leitura(s) de mundo", associado à ideia de pensar a questão dos Multiletramentos nas Ciências Humanas, busca reunir trabalhos que reflitam sobre as variadas formas de leitura/reflexões do mundo por meio das relações entre linguagens artísticas (Literatura, Cinema, Música, Artes Plásticas, etc.) e política, considerando articulações com outros saberes e disciplinas.');
		
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->MultiCell(170, 10, "GT - Ensino transformador de línguas: atualizando práticas pedagógicas tradicionais para formar o cidadão do século XXI");
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, "Profa. Dra. Raquel Bambirra - CEFET-MG Campus Belo Horizonte");
		
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		$pdf->MultiCell(180, 10, 'O deslocamento cada vez maior do lugar de realização das práticas sociais para o universo virtual, viabilizado pela democratização e consequente apropriação das tecnologias digitais, delineia um novo perfil de estudantes que ingressam na educação básica da escola regular e dos centros de ensino profissional todos os anos (MARCHETTI; TAVARES, 2012). Esses jovens, também conhecidos como aprendizes participativos, (1) privilegiam a imagem (estática ou em movimento) ao modo linguístico, ao se expressarem - são alfabetizados digitalmente, (2) compartilham o que fazem - estão sempre conectados, (3) interagem instantaneamente via tecnologia digital, (4) são multitarefas e (5) preferem aprender por tentativa e erro (DIAS, 2015; CORRÊA, 2019). Por meio do uso de tecnologia digital, eles subvertem a maneira de produzir sentido: "o modo de linguagem escrita - modo linguístico - interage com os padrões de significado oral, visual, auditivo, gestual, tátil e espacial" (KALANTZIS; COPE, 2012, p. 2), na composição dos textos multimodais, altamente semiotizados. Em consonância com Cope e Kalantzis (2008; 2010), acreditamos que o currículo e o material didático precisam ser repensados para tornarem-se relevantes à vida pessoal e à vida acadêmica dos estudante. Neste GT pretendemos discutir trabalhos de natureza aplicada, propostos com base na pedagogia dos multiletramentos, na expectativa de gerar discussões capazes de inspirar os professores interessados em refinarem o seu fazer, tanto na escola regular quanto nos centros de ensino profissional, e em transformarem-se em agentes formadores do cidadão do século XXI.');
		
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		$pdf->MultiCell(170, 10, "GT - Entre folhas de papel e ambientes digitais: Reflexões sobre os caminhos e fronteiras do linguístico e literário na contemporaneidade");
		
		$pdf->SetFont('Arial', '', 13);
		$pdf->MultiCell(170, 10, "Profa. Edilaine Gonçalves Ferreira de Toledo - CEFET-MG Campus Varginha");
	    $pdf->SetFont('Arial', '', 13);
		$pdf->MultiCell(170, 10, "Profa. Carina Adriele Duarte de Melo Figueiredo - UNIS-MG Campus Varginha");
		
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		$pdf->MultiCell(180, 10, 'Em tempos de cultura digital, o texto, na forma mais tradicional em que é conhecido, tanto no aspecto linguístico quanto literário, ganhou novos conceitos, sentidos, formas, conteúdos e interatividade que o tornam mais dinâmico na relação com seu interlocutor. Por outro lado, a sociedade contemporânea, no que tange à linguagem, ainda é predominantemente grafocêntrica e canônica quando se apresenta de modo oficial e literário. A necessidade de pensar as habilidades de leitura e escrita nos tempos atuais , considerando os variados recursos disponíveis e mobilizados entre nós, é de consenso entre muitos pesquisadores, e isso se deve ao contexto contemporâneo enfatizado, principalmente, pelos consolidados avanços tecnológicos e pelo fenômeno da globalização, que acentuam, significativamente, as divergências entre o virtual e o analógico no processo de ensino e aprendizagem de nossa sociedade. Assim, a proposta deste simpósio temático é congregar trabalhos que apresentem questões que problematizam as reflexões e usos do linguístico e do literário em tempos de cultura digital, numa perspectiva inter/multi/transdisciplinar entre o analógico e o digital no cotidiano social, escolar, profissional..., com interface nas diversas linguagens verbais e não verbais, como edição de livros, animações, hipercontos, ciberpoesias, narrativas multimídia, charges, cartuns, cinema, artes plásticas, entre outros. Pretende-se reunir pesquisadores e trabalhos que viabilizem a socialização de práticas, comportamentos e ações que ampliem os horizontes do linguístico e do literário no viés da plena digitalidade que temos vivenciado.');

		$pdf->Output('D', 'ementas.pdf');	
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
			
			/* Códigos para retorno ao index:
			
				2 - Erro no CPF
				3 - Limite atingido
				4 - Qualquer erro
				5 - E-mails divergentes
				6 - Sucesso
			
			*/
			
			$dados = $this->menu;						
	        $dados['url'] = base_url();
   	        $dados['display'] = 'none';
			
			require 'assets/PHPMailer/PHPMailerAutoload.php';
    	    $mail = new PHPMailer();
    	    $mail->CharSet = 'utf-8';
	        $mail->IsSMTP();
    	    $mail->isHTML(true);
    	    $mail->SMTPDebug = 1;
	        $mail->Encoding = 'base64';
    	    $mail->SMTPAuth = true;
    	    $mail->SMTPSecure = 'tls';
    	    $mail->Host = "smtp.gmail.com";
    	    $mail->Port = 587;
    	    $mail->Username = "simposiovarginha@gmail.com";
    	    $mail->Password = "gelldispesquisa";
		    $mail->From = "simposiovarginha@gmail.com";
		    $mail->FromName = "3º Simpósio de Língua e Literatura";
		    
			//$this->load->library('email');
			
			$form = $this->input->post();
			$data['NOME'] = $form['txt_nome'];	 
			$data['CPF'] = $form['txt_cpf'];
			$data['EMAIL'] = $form['txt_email'];
			$confemail = $form['txt_confemail'];
			$data['INSTITUICAO'] = $form['txt_instituicao'];
			$data['NECESSIDADES'] = $form['necessidade'];
			$data['NECESSIDADES_TEXTO'] = $form['necessidade_texto'];
			$data['TIPO'] = $form['tipo'];
			$data['idEVENTO'] = $form['evento'];
			
			$dados['NOME'] = $data['NOME'];	 
			$dados['CPF'] = $data['CPF'];
			$dados['EMAIL'] = $data['EMAIL'];
			$dados['INSTITUICAO'] = $data['INSTITUICAO'];
			$dados['TIPO'] = $data['TIPO'];
			$dados['idEVENTO'] = $data['idEVENTO'];
			$dados['NECESSIDADES'] = $data['NECESSIDADES'];
			$dados['NECESSIDADES_TEXTO'] = $data['NECESSIDADES_TEXTO'];		

					
			if ($confemail != $data['EMAIL']) {
				redirect('Inicio/index/5');			
			}		
			
			// O código verá se já existe algum CPF idêntico cadastrado
			
			$this->db->select("INSCRITO.idINSCRITO");
			$this->db->from("INSCRITO");
			$this->db->where("INSCRITO.cpf", $data['CPF']);
			$conf = $this->db->get()->result();
			
			if(count($conf) > 0) {

				// Caso o CPF esteja duplicado, a mensagem de erro será exibida.
				
				redirect('Inicio/index/2');
				/*echo '<script type="text/javascript">confirm("O CPF informado já foi cadastrado.");</script>';	
				$this->index();*/		

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
							
			                $mail->Subject = "Confirmação de Cadastro - 3º SILL";
		                    $mail->Body = "Obrigado (a)! Sua inscrição foi REGISTRADA e aguarda quitação da taxa de investimento! O comprovante do depósito deverá ser enviado para o e-mail simposiovarginha@gmail.com ";
		                    $mail->AltBody = "Conteúdo";
		                    $mail->AddAddress($dados['EMAIL']);
    	                    //$mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
    	                    //echo !extension_loaded('openssl')?"Not Available":"Available";
    	                    if ($mail->Send()) {
			                    redirect('Inicio/index/6');		  
		                    } else {
			                    redirect('Inicio/index/4');
		                    }
			
							/*$this->email->from("simposiovarginha@gmail.com", "3º Simpósio de Língua e Literatura");
							$this->email->to($dados['EMAIL']);
							$this->email->subject("Confirmação de Cadastro - 3° SILL");
							$this->email->message("Cadastro confirmado.");					
							
							if ($this->email->send()){
								redirect('Inicio/index/6');
							} else {
							    print_r($this->email->print_debugger());
								//redirect('Inicio/index/4');								
							}*/
							// PARA FAZER: Enviar e-mail de confirmação
							
						
						} else {
						
							$data['SITUACAO'] = 1; // Situação 1 = INDEFERIDO
							
							$this->db->insert('INSCRITO', $data);
													
							$mail->Subject = "Cadastro Indeferido - 3º SILL";
		                    $mail->Body = "Inscrição não registrada: limite de ouvintes excedido.";
		                    $mail->AltBody = "Conteúdo";
		                    $mail->AddAddress($dados['EMAIL']);
    	                    //$mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
    	                    //echo !extension_loaded('openssl')?"Not Available":"Available";
    	                    if ($mail->Send()) {
			                    redirect('Inicio/index/3');		  
		                    } else {
			                    redirect('Inicio/index/4');
		                    }
							
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
			
			require 'assets/PHPMailer/PHPMailerAutoload.php';
    	    $mail = new PHPMailer();
    	    $mail->CharSet = 'utf-8';
	        $mail->IsSMTP();
    	    $mail->isHTML(true);
    	    $mail->SMTPDebug = 1;
	        $mail->Encoding = 'base64';
    	    $mail->SMTPAuth = true;
    	    $mail->SMTPSecure = 'tls';
    	    $mail->Host = "smtp.gmail.com";
    	    $mail->Port = 587;
    	    $mail->Username = "simposiovarginha@gmail.com";
    	    $mail->Password = "gelldispesquisa";
		    $mail->From = "simposiovarginha@gmail.com";
		    $mail->FromName = "3º Simpósio de Língua e Literatura";
			
			//$this->load->library('email');
			
			$form = $this->input->post();
			$data['NOME'] = $form['nome'];	 
			$data['CPF'] = $form['cpf'];
			$data['EMAIL'] = $form['email'];
			$data['INSTITUICAO'] = $form['instituicao'];
			$data['idEVENTO'] = $form['idEVENTO'];
			$data['NECESSIDADES'] = $form['necessidade'];
			$data['NECESSIDADES_TEXTO'] = $form['necessidade_texto'];
			$data['TITULO'] = $form['titulo'];
			$data['PALAVRAS_CHAVE'] = $form['palavras_chave'];
			$data['ARTIGO'] = $form['artigo']; 
  
			$data['TIPO'] = 1;
    
    		$this->db->select("EVENTO.numtrabalhos, EVENTO.numtotal");
    		$this->db->from("EVENTO");
    		$this->db->where("EVENTO.idEVENTO", $data['idEVENTO']);
    		$total = $this->db->get()->result();
    		
			$palavras_teste = explode(';', $data['PALAVRAS_CHAVE']);
			$i = 0;
			
			foreach ($palavras_teste as $p) {
				$i++;			
			}    	
			
			$i--;	
    		
			//echo $data['NOME']."-".$data['INSTITUICAO']."-".$data['CPF'].'-'.$data['EMAIL'].'-'.$data['idEVENTO'].'-'.$data['TIPO'];    		
    		if (($i >= 2) && ($i <= 5)) {
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
				
						// PARA FAZER: Enviar e-mail de confirmação					

                        $mail->Subject = "Confirmação de Cadastro - 3º SILL";
		                $mail->Body = "Obrigado (a)! Sua inscrição foi REGISTRADA com sucesso! As cartas de aceite serão liberadas entre 13 e 20 de Maio para que você possa quitar a taxa de investimento e enviar o comprovante do depósito para o e-mail simposiovarginha@gmail.com";
		                $mail->AltBody = "Conteúdo";
		                $mail->AddAddress($data['EMAIL']);
    	                //$mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
    	                //echo !extension_loaded('openssl')?"Not Available":"Available";
    	                if ($mail->Send()) {
			                redirect('Inicio/index/6');		  
		                } else {
			                redirect('Inicio/index/4');
		                }
						/*$this->email->from("simposiovarginha@gmail.com", "3º Simpósio de Língua e Literatura");
						$this->email->to($data['EMAIL']);
						$this->email->subject("Confirmação de Cadastro - 3° SILL");
						$this->email->message("Cadastro confirmado.");
						
						if ($this->email->send()){
								redirect('Inicio/index/6');
						} else {
								redirect('Inicio/index/4');								
						}*/

					} else {

						$data['SITUACAO'] = 1;
							
						$this->db->insert('INSCRITO', $data);					
						
						$mail->Subject = "Cadastro Indeferido - 3º SILL";
		                $mail->Body = "Inscrição não registrada: limite de comunicação  em GT excedida.";
		                $mail->AltBody = "Conteúdo";
		                $mail->AddAddress($data['EMAIL']);
    	                //$mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
    	                //echo !extension_loaded('openssl')?"Not Available":"Available";
    	                if ($mail->Send()) {
			                redirect('Inicio/index/3');		  
		                } else {
			                redirect('Inicio/index/4');
		                }
						/*$this->email->from("simposiovarginha@gmail.com", "3º Simpósio de Língua e Literatura");
						$this->email->to($data['EMAIL']);
						$this->email->subject("Cadastro Indeferido - 3° SILL");
						$this->email->message("Cadastro indeferido.");				
				
						if ($this->email->send()){							
								redirect('Inicio/index/3');
						} else {
							redirect('Inicio/index/4');	
						}*/
		
					}    		
    			}
    		} else {

				// ???????????????????????????????		
				
				redirect('Inicio/index/7');
					
    		}
    }

}

