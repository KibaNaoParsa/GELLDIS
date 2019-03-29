<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricao extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function inscrito_ouvinte() {
			
		  $this->db->select("INSCRITO.idINSCRITO, INSCRITO.NOME, INSCRITO.EMAIL, INSCRITO.CPF, INSCRITO.NECESSIDADES, INSCRITO.SITUACAO, EVENTO.NOME as NOME_EVENTO");
		  $this->db->from("INSCRITO");
		  $this->db->join("EVENTO", "EVENTO.idEVENTO = INSCRITO.idEVENTO", 'inner');
		  $this->db->where("INSCRITO.TIPO", 0);
		  $dados['INSCRITO'] = $this->db->get()->result();
		  
		  $dados['url'] = base_url();
		  $dados['display'] = 'none';
		  $dados['acao'] = 'Ouvintes inscritos';
		  $dados['conteudo'] = $this->parser->parse("adm/inscricoes/ouvintes", $dados, TRUE);
		  
		  $this->parser->parse("adm/layout_adm", $dados);
	
	}

	public function inscrito_apresentador() {

		  $this->db->select("INSCRITO.idINSCRITO, INSCRITO.NOME, INSCRITO.EMAIL, INSCRITO.TITULO, INSCRITO.CPF, INSCRITO.NECESSIDADES,INSCRITO.SITUACAO, EVENTO.NOME as NOME_EVENTO");
		  $this->db->from("INSCRITO");
		  $this->db->join("EVENTO", "EVENTO.idEVENTO = INSCRITO.idEVENTO", 'inner');
		  $this->db->where("INSCRITO.TIPO", 1);
		  $dados['INSCRITO'] = $this->db->get()->result();
		  
		  $dados['url'] = base_url();
		  $dados['display'] = 'none';
		  $dados['acao'] = 'Comunicadores inscritos';
		  $dados['conteudo'] = $this->parser->parse("adm/inscricoes/apresentadores", $dados, TRUE);
		  
		  $this->parser->parse("adm/layout_adm", $dados);
	
	}
	
	public function exibir_artigo($idI) {

		  $this->db->select("INSCRITO.idINSCRITO, INSCRITO.NOME, INSCRITO.EMAIL, INSCRITO.CPF, INSCRITO.TITULO, INSCRITO.ARTIGO, INSCRITO.SITUACAO, EVENTO.NOME as NOME_EVENTO");
		  $this->db->from("INSCRITO");
		  $this->db->join("EVENTO", "EVENTO.idEVENTO = INSCRITO.idEVENTO", 'inner');
		  $this->db->where("INSCRITO.idINSCRITO", $idI);
		  $dados['INSCRITO'] = $this->db->get()->result();
		  
		  $dados['url'] = base_url();
		  $dados['display'] = 'none';
		  $dados['acao'] = 'Ouvintes inscritos';
		  $dados['conteudo'] = $this->parser->parse("adm/inscricoes/artigo", $dados, TRUE);
		  
		  $this->parser->parse("adm/layout_adm", $dados);
	
	}
	
	public function gerar_pdf() {
		require('assets/fpdf/fpdf.php');
		
		$pdf = new FPDF();
		
		// OTIMIZAR ESSE CÓDIGO 
		
		$this->db->select("EVENTO.idEVENTO, EVENTO.NOME");
		$this->db->from("EVENTO");
		$this->db->where("EVENTO.idEVENTO", 1);
		$data['GT'] = $this->db->get()->result();		
		
		$this->db->select("INSCRITO.idINSCRITO, INSCRITO.idEVENTO, INSCRITO.NOME as NOMEINSCRITO, INSCRITO.EMAIL, INSCRITO.TIPO, INSCRITO.NECESSIDADES, INSCRITO.TITULO");
		$this->db->from("INSCRITO");
		$this->db->join("EVENTO", "EVENTO.idEVENTO = INSCRITO.idEVENTO", 'inner');		
		$this->db->where('INSCRITO.SITUACAO', 0);
		$this->db->where('INSCRITO.idEVENTO', 1);
		$this->db->order_by("INSCRITO.TIPO", 'desc');
		$data['GT1'] = $this->db->get()->result();
	
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		
		foreach ($data['GT'] as $i) {
			$pdf->MultiCell(170, 10, $i->NOME);
		}
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, '* indica Portador de Necessidades Especiais');
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		foreach ($data['GT1'] as $d) {
			if ($d->TIPO == 1) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				}			
			} else if($d->TIPO == 0) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
				}						
			}		
		}
		
		$this->db->select("EVENTO.idEVENTO, EVENTO.NOME");
		$this->db->from("EVENTO");
		$this->db->where("EVENTO.idEVENTO", 2);
		$data['GT'] = $this->db->get()->result();		
		
		$this->db->select("INSCRITO.idINSCRITO, INSCRITO.idEVENTO, INSCRITO.NOME as NOMEINSCRITO, INSCRITO.EMAIL, INSCRITO.TIPO, INSCRITO.NECESSIDADES, INSCRITO.TITULO");
		$this->db->from("INSCRITO");
		$this->db->join("EVENTO", "EVENTO.idEVENTO = INSCRITO.idEVENTO", 'inner');		
		$this->db->where('INSCRITO.SITUACAO', 0);
		$this->db->where('INSCRITO.idEVENTO', 2);
		$this->db->order_by("INSCRITO.TIPO", 'desc');
		$data['GT1'] = $this->db->get()->result();
	
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		
		foreach ($data['GT'] as $i) {
			$pdf->MultiCell(170, 10, $i->NOME);
		}
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, '* indica Portador de Necessidades Especiais');
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		foreach ($data['GT1'] as $d) {
			if ($d->TIPO == 1) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				}			
			} else if($d->TIPO == 0) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
				}						
			}		
		}
		
		$this->db->select("EVENTO.idEVENTO, EVENTO.NOME");
		$this->db->from("EVENTO");
		$this->db->where("EVENTO.idEVENTO", 3);
		$data['GT'] = $this->db->get()->result();		
		
		$this->db->select("INSCRITO.idINSCRITO, INSCRITO.idEVENTO, INSCRITO.NOME as NOMEINSCRITO, INSCRITO.EMAIL, INSCRITO.TIPO, INSCRITO.NECESSIDADES, INSCRITO.TITULO");
		$this->db->from("INSCRITO");
		$this->db->join("EVENTO", "EVENTO.idEVENTO = INSCRITO.idEVENTO", 'inner');		
		$this->db->where('INSCRITO.SITUACAO', 0);
		$this->db->where('INSCRITO.idEVENTO', 3);
		$this->db->order_by("INSCRITO.TIPO", 'desc');
		$data['GT1'] = $this->db->get()->result();
	
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		
		foreach ($data['GT'] as $i) {
			$pdf->MultiCell(170, 10, $i->NOME);
		}
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, '* indica Portador de Necessidades Especiais');
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		foreach ($data['GT1'] as $d) {
			if ($d->TIPO == 1) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				}			
			} else if($d->TIPO == 0) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
				}						
			}		
		}
		
		$this->db->select("EVENTO.idEVENTO, EVENTO.NOME");
		$this->db->from("EVENTO");
		$this->db->where("EVENTO.idEVENTO", 4);
		$data['GT'] = $this->db->get()->result();		
		
		$this->db->select("INSCRITO.idINSCRITO, INSCRITO.idEVENTO, INSCRITO.NOME as NOMEINSCRITO, INSCRITO.EMAIL, INSCRITO.TIPO, INSCRITO.NECESSIDADES, INSCRITO.TITULO");
		$this->db->from("INSCRITO");
		$this->db->join("EVENTO", "EVENTO.idEVENTO = INSCRITO.idEVENTO", 'inner');		
		$this->db->where('INSCRITO.SITUACAO', 0);
		$this->db->where('INSCRITO.idEVENTO', 4);
		$this->db->order_by("INSCRITO.TIPO", 'desc');
		$data['GT1'] = $this->db->get()->result();
	
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		
		foreach ($data['GT'] as $i) {
			$pdf->MultiCell(170, 10, $i->NOME);
		}
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, '* indica Portador de Necessidades Especiais');
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		foreach ($data['GT1'] as $d) {
			if ($d->TIPO == 1) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				}			
			} else if($d->TIPO == 0) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
				}						
			}		
		}
		
		$this->db->select("EVENTO.idEVENTO, EVENTO.NOME");
		$this->db->from("EVENTO");
		$this->db->where("EVENTO.idEVENTO", 5);
		$data['GT'] = $this->db->get()->result();		
		
		$this->db->select("INSCRITO.idINSCRITO, INSCRITO.idEVENTO, INSCRITO.NOME as NOMEINSCRITO, INSCRITO.EMAIL, INSCRITO.TIPO, INSCRITO.NECESSIDADES, INSCRITO.TITULO");
		$this->db->from("INSCRITO");
		$this->db->join("EVENTO", "EVENTO.idEVENTO = INSCRITO.idEVENTO", 'inner');		
		$this->db->where('INSCRITO.SITUACAO', 0);
		$this->db->where('INSCRITO.idEVENTO', 5);
		$this->db->order_by("INSCRITO.TIPO", 'desc');
		$data['GT1'] = $this->db->get()->result();
	
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		
		foreach ($data['GT'] as $i) {
			$pdf->MultiCell(170, 10, $i->NOME);
		}
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, '* indica Portador de Necessidades Especiais');
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		foreach ($data['GT1'] as $d) {
			if ($d->TIPO == 1) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				}			
			} else if($d->TIPO == 0) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
				}						
			}		
		}
		
		$this->db->select("EVENTO.idEVENTO, EVENTO.NOME");
		$this->db->from("EVENTO");
		$this->db->where("EVENTO.idEVENTO", 6);
		$data['GT'] = $this->db->get()->result();		
		
		$this->db->select("INSCRITO.idINSCRITO, INSCRITO.idEVENTO, INSCRITO.NOME as NOMEINSCRITO, INSCRITO.EMAIL, INSCRITO.TIPO, INSCRITO.NECESSIDADES, INSCRITO.TITULO");
		$this->db->from("INSCRITO");
		$this->db->join("EVENTO", "EVENTO.idEVENTO = INSCRITO.idEVENTO", 'inner');		
		$this->db->where('INSCRITO.SITUACAO', 0);
		$this->db->where('INSCRITO.idEVENTO', 6);
		$this->db->order_by("INSCRITO.TIPO", 'desc');
		$data['GT1'] = $this->db->get()->result();
	
		$pdf->AddPage();
		$pdf->SetFont('Arial', 'B', 16);
		
		foreach ($data['GT'] as $i) {
			$pdf->MultiCell(170, 10, $i->NOME);
		}
		
		$pdf->SetFont('Arial', '', 14);
		$pdf->MultiCell(170, 10, '* indica Portador de Necessidades Especiais');
		$pdf->Ln();
		
		$pdf->SetFont('Arial', '', 12);
		foreach ($data['GT1'] as $d) {
			if ($d->TIPO == 1) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
					$pdf->MultiCell(170, 10, 'Título: '.$d->TITULO);				
				}			
			} else if($d->TIPO == 0) {
				if ($d->NECESSIDADES == 1) {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.'* - '.$d->EMAIL);
				} else {
					$pdf->MultiCell(170, 10, $d->NOMEINSCRITO.' - '.$d->EMAIL);
				}						
			}		
		}
		$pdf->Output();	
	}
	
	
	// Fim de chamada de view
	
	public function pag_ouvinte($idI) {
		
		$dados['SITUACAO'] = 0;
		$this->db->where("INSCRITO.idINSCRITO", $idI);
		$this->db->update("INSCRITO", $dados);
		
		redirect('adm/inscricao/inscrito_ouvinte');	

	}

	public function indeferir_ouvinte($idI) {
		
		$dados['SITUACAO'] = 1;
		$this->db->where("INSCRITO.idINSCRITO", $idI);
		$this->db->update("INSCRITO", $dados);
		
		redirect('adm/inscricao/inscrito_ouvinte');	

	}

	public function deferir_ouvinte($idI) {
		
		$dados['SITUACAO'] = 2;
		$this->db->where("INSCRITO.idINSCRITO", $idI);
		$this->db->update("INSCRITO", $dados);
		
		redirect('adm/inscricao/inscrito_ouvinte');	

	}

	public function pag_apresentador($idI) {
		
		$dados['SITUACAO'] = 0;
		$this->db->where("INSCRITO.idINSCRITO", $idI);
		$this->db->update("INSCRITO", $dados);
		
		redirect('adm/inscricao/inscrito_apresentador');	

	}

	public function indeferir_apresentador($idI) {
		
		$dados['SITUACAO'] = 1;
		$this->db->where("INSCRITO.idINSCRITO", $idI);
		$this->db->update("INSCRITO", $dados);
		
		redirect('adm/inscricao/inscrito_apresentador');	
		
	}

	public function deferir_apresentador($idI) {
		
		$dados['SITUACAO'] = 2;
		$this->db->where("INSCRITO.idINSCRITO", $idI);
		$this->db->update("INSCRITO", $dados);
		
		redirect('adm/inscricao/inscrito_apresentador');	

	}
	
}

