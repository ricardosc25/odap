<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendEmail extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('email');
	}

	public function enviar_email(){
		$this->email->from('no-responder@gmail.com', 'Odap');
  		$this->email->to('ricardosc2010@hotmail.es');
  		$this->email->subject('Email de prueba');
 		$this->email->message('<b>Mensaje de prueba</b><br><p>Hola, este es un mensaje de prueba.</>');
			if($this->email->send())
			  {
			   echo 'Correo enviado';
			  }

  			else
			  {
			   show_error($this->email->print_debugger());
			  }
	}
}