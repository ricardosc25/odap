<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		//Cargamos Helper, Libreria (Email) y el Modelo (odap_model)
		$this->load->helper('url');
		$this->load->library('email');
		$this->load->model('login_model');
	}

	public function index()
	{	
		$data['title'] = 'Login';
		$this->load->view('login_view',$data);
	}
	public function logueo(){
		$rules = array(
			array(
				'field' => 'usuario',
				'label' => 'Usuario',
				'rules' => 'required'
				),
			array(
				'field' => 'contrasena',
				'label' => 'Contraseña',
				'rules' => 'required'
				));

		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else
		{
			$data = array(
				'user' => $this->input->post('usuario'),
				'pass' => md5($this->input->post('contrasena')),
				'login' => TRUE
			 );

			$resp = $this->login_model->validarUsuario($data);
			if ($resp == TRUE) 
			{
				$this->session->set_userdata($data);
				redirect('odap/capacitaciones');
			}
			else
			{
				$this->session->set_flashdata('login_false', 'Usuario o contrasena invalida');
				redirect('/login/index/', 'refresh');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		header("Location: " . base_url());
	}

}