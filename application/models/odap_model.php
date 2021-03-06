<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Odap_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function insertar($data){
		$this->db->insert('inscripciones', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function insertar_publicacion($data){
		$this->db->insert('capacitaciones', $data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}


	public function validar_ident($num_ident){
		$this->db->select('ident_user')
		->where('ident_user', $num_ident);
		$query = $this->db->get('inscripciones');
		if ($query->num_rows() > 0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function validar_email($email){
		$this->db->select('email_user')
		->where('email_user', $email);
		$query = $this->db->get('inscripciones');
		if ($query->num_rows() > 0){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function getCapacitaciones(){
		$this->db->where('estado_cap',1);
		$this->db->order_by("fecha_creacion", "desc"); 
		$query = $this->db->get('capacitaciones');
		return $query->result();

	}

}
?>