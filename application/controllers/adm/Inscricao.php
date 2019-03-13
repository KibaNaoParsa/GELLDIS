<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inscricao extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function inscrito_ouvinte() {
			
		  $this->db->select("INSCRITO.idINSCRITO, INSCRITO.NOME, INSCRITO.EMAIL, INSCRITO.CPF, INSCRITO.SITUACAO, EVENTO.NOME as NOME_EVENTO");
		  $this->db->from("INSCRITO");
		  $this->db->join("EVENTO", "EVENTO.idEVENTO = INSCRITO.idEVENTO", 'inner');
		  $this->db->where("INSCRITO.TIPO", 0);
		  $dados['INSCRITO'] = $this->db->get()->result();
	
		
	
	
	}

	public function inscrito_apresentador() {
	
	}
}

