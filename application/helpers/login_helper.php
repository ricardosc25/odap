<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function is_logged_in() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
    $data = array(
				'user' => $CI->input->post('usuario'),
				'pass' => $CI->input->post('contrasena')
			 );

    $user = $CI->session->set_userdata($data);
    if (!isset($user)) { return false; } else { return true; }
}

function getNombre(){
	return "<h1>Ricardo Suarez</h1>";
}