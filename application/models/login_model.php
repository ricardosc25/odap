<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function validarUsuario($data)
	{
		$this->db->where('usuario',$data['user']);
		$this->db->where('contrasena',$data['pass']);
		$query = $this->db->get('login');
		if($query->num_rows()>0){
			return true;
		}
		else
		{
			return false;
		}

	}	

}
?>