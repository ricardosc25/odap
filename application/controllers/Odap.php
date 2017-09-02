<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Odap extends CI_Controller {

	function __construct(){
		parent::__construct();
		//Cargamos Helper, Libreria (Email) y el Modelo (odap_model)
		$this->load->helper('url');
		$this->load->library('email');
		$this->load->model('odap_model');
	}

	public function index()
	{	
		$data['title'] = 'Odap';
		$data['main_content'] = 'home';
		$this->load->view('template',$data);
	}

	public function nosotros()
	{
		$data['title'] = 'Odap';
		$data['main_content'] = 'nosotros';
		$this->load->view('template',$data);
	}

	public function capacitaciones()
	{	$data['lista_capacitaciones'] = $this->odap_model->getCapacitaciones(); 
		$data['title'] = 'Odap';
		$data['main_content'] = 'capacitaciones';
		$this->load->view('template',$data);
	}

	public function galeria()
	{	
		$data['title'] = 'Odap';
		$data['main_content'] = 'galeria';
		$this->load->view('template',$data);
	}

	public function publicaciones()
	{
		if($this->session->userdata('login')){
		$data['title'] = 'Odap';
		$data['main_content'] = 'publicaciones';
		$this->load->view('template',$data);
	}else
	{
		redirect('/login/index/');
	}
	}

	public function publicar(){
		$rules = array(
			array(
				'field' => 'titulo',
				'label' => 'Título',
				'rules' => 'required|strtoupper|min_length[7]|max_length[30]'
				),
			array(
				'field' => 'descripcion',
				'label' => 'Descripción',
				'rules' => 'required|ucfirst|min_length[7]|max_length[600]'
				),
			array(
				'field' => 'horas',
				'label' => 'Horas',
				'rules' => 'required|min_length[1]|max_length[3]'
				),
			array(
				'field' => 'estado',
				'label' => 'Estado',
				'rules' => 'required'
				),
			array(
				'field' => 'fecha',
				'label' => 'Fecha de capacitacion', 
				'rules' => 'required'
				)
			);
		
			//Pasamos el array para que sea validadado por el Form_Validation
			$this->form_validation->set_rules($rules);
			//Si la validación falla (False)
			if($this->form_validation->run() == FALSE){
				//Entonces volvemos a cargar el formulario de inscripción
				$this->publicaciones();
			}
			else
			{
			//Obtenemos los datos enviados por POST en el array $data.
			$data = array(
			'titulo_cap' => $this->input->post('titulo'),
			'descripcion_cap' => $this->input->post('descripcion'),
			'horas_cap' => $this->input->post('horas'),
			'estado_cap' => $this->input->post('estado'),
			'fecha_cap' => date('Y-m-d H:i:s',strtotime($this->input->post('fecha'))),
			'fecha_creacion' => date('Y-m-d H:i:s'));

			// Confirmamos que los datos se hayan insertado en la base de datos, retornando TRUE.
			$resp = $this->odap_model->insertar_publicacion($data);
			//Si $resp es verdadera.
			if ($resp == TRUE) {
				//Creamos una variable de session para asignarle un mensaje.
				$this->session->set_flashdata('publi_exitosa', 'La publicación se ha creado exitosamente');
				//Redireccionamos al controlador Odap y la función capacitaciones, y pasamos la variable refresh.
				redirect('/odap/capacitaciones', 'refresh');
			}//sino
			else{
				//Cargamos la funcion (error) que muestra mensaje al guardar los datos
				$this->error(); 
			}
			
		}
	}

	public function inscripcion()
	{
		$data['title'] = 'Inscripción';
		$data['main_content'] = 'inscripcion';
		$this->load->view('template',$data);
	}

	public function contacto()
	{

            $data['title'] = 'Contacto';
	    $data['main_content'] = 'contacto';
	    $this->load->view('template',$data);
		
	}

	public function success() //Vista de confirmación al almacenar los datos de manera exitosa
	{
		$data['title'] = 'Registro exitoso';  
		$data['main_content'] = 'successGuardar';
		$this->load->view('template',$data);
	}

	public function error() //Funcion que muestra error al guardar los datos
	{
		$data['title'] = 'Error al guardar los datos';
		$data['main_content'] = 'errorGuardar';
		$this->load->view('template',$data);
	}

	public function insertar_inscripcion(){
		//Array de validacion de los datos ingresedos en el formulario
		$rules = array(
			array(
				'field' => 'identificacion',
				'label' => 'N° de identificación',
				'rules' => 'required|numeric|min_length[6]|max_length[12]|trim|callback_check_ident'
				),
			array(
				'field' => 'nombres',
				'label' => 'Nombres',
				'rules' => 'required|strtoupper|min_length[3]|max_length[30]'
				),
			array(
				'field' => 'apellidos',
				'label' => 'Apellidos',
				'rules' => 'required|strtoupper|min_length[3]|max_length[30]'
				),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|strtoupper|valid_email|valid_emails|trim|callback_check_email'
				),
			array(
				'field' => 'conf_email',
				'label' => 'Confirmar Email',
				'rules' => 'required|strtoupper|valid_email|valid_emails|matches[email]|trim'
				),
			array(
				'field' => 'telefono',
				'label' => 'Telefono fijo',
				'rules' => 'numeric|min_length[7]|max_length[7]|trim'
				),
			array(
				'field' => 'celular',
				'label' => 'Celular',
				'rules' => 'required|numeric|min_length[10]|max_length[10]|trim'
				),
			array(
				'field' => 'profesion',
				'label' => 'Profesión',
				'rules' => 'required|strtoupper|min_length[6]|max_length[50]'
				),
			array(
				'field' => 'encuesta',
				'label' => 'Me enteré de este programa a través de',
				'rules' => 'required|strtoupper'
				),
			array(
				'field' => 'terminos',
				'label' => 'Términos y condiciones',
				'rules' => 'required'
				)
			);
		
		//Pasamos el array para que sea validadado por el Form_Validation
		$this->form_validation->set_rules($rules);
		//Si la validación falla (False)
		if($this->form_validation->run() == FALSE){
			//Entonces volvemos a cargar el formulario de inscripción
			$this->inscripcion();
		//Sino				
		}else{
			//Creamos el array ($data) que recibirá los datos ingresados en el formulario previamente validados 
			$data = array(
				'ident_user' => $this->input->post('identificacion',TRUE),
				'nom_user' => $this->input->post('nombres',TRUE),
				'ape_user' => $this->input->post('apellidos',TRUE),
				'email_user' => $this->input->post('email',TRUE),
				'telefono_user' => $this->input->post('telefono',TRUE),
				'celular_user' => $this->input->post('celular',TRUE),
				'profesion_user' => $this->input->post('profesion',TRUE),
				'encuesta_user' => $this->input->post('encuesta',TRUE),
				'codigo_banc_user' => $this->input->post('codigo_banc',TRUE),
				'terminos_user' => $this->input->post('terminos',TRUE),
				'fec_creacion' => date('Y-m-d H:i:s'));
			
			//Declaramos la variable '$res' y enviamos el array $data al modelo para que se inserte en la DB, luego se obtendra una respuesta booleana si se afecto la base de datos al insertar un registro.
			$res = $this->odap_model->insertar($data);
			//Si la variable $res obtiene un valor booleano TRUE (Se insertaron los datos en la DB)
			if ($res == TRUE) {
				//Entonces, enviamos un email al usuario que se ha registrado.
				$this->email->from('no-responder@gmail.com', 'Ricardo Suárez');
				$this->email->to(set_value("email")); //Obtiene el valor del campo Email del formulario
				$this->email->subject('Email de prueba');
				$this->email->message('<b>Hola '.set_value("nombres").',</b><br><p>Este es un mensaje de prueba.</>');
				if($this->email->send()) //Si el correo se envió exitosamente, entonces
					  {
					   	$this->success(); //Cargamos la funcion success.
					  }

  				else
					  {
					   $this->error(); //Cargamos la funcion error
					   //show_error($this->email->print_debugger()); //Imprimimos el error en pantalla
					  }
			}
			else{
				Echo 'Fallo al registrarse';
				}		
			}
		}

		public function check_ident($num_ident){
			if($this->odap_model->validar_ident($num_ident)){
				$this->form_validation->set_message('check_ident', 'El %s ya está registrado en la base de datos');
				return FALSE;
			}else{
				return TRUE;
			}

		}


		public function check_email($email){
			if($this->odap_model->validar_email($email)){
				$this->form_validation->set_message('check_email', 'El %s ya está registrado en la base de datos');
				return FALSE;
			}else{
				return TRUE;
			}

		}

		public function listCapacitaciones(){
		$data['listCapa'] = $this->odap_model->listCapacitaciones(); 
		$data['title'] = 'Odap';
		$data['main_content'] = 'listCapaView';
		$this->load->view('template',$data);
	}

}
