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

	public function listCapacitaciones(){ 
		$query = $this->db->get('capacitaciones');
		return $query->result();

	}

	//obtenemos la fila completa del mensaje a editar
    //vemos que como solo queremos una fila utilizamos
    //la función row que sólo nos devuelve una fila,
    //así la consulta será más rápida
        public function obtener($id) {
        $this->db->where('id_cap', $id);
        $query = $this->db->get('capacitaciones');
        $fila = $query->row();
        return $fila;
    }

     //actualizamos los datos en la base de datos con el patrón
    //active record de codeIginiter, recordar que no hace falta
    //escapar las consultas ya que lo hace él automaticámente
    public function actualizar_capacitaciones($id, $titulo, $descripcion, $horas, $fechaCapa) {
        $data = array(
            'titulo_cap' => $titulo,
            'descripcion_cap' => $descripcion,
            'horas_cap' => $horas,
            'estado_cap' => $estado,
            'fecha_cap' => $fechaCapa
        );
        $this->db->where('id_cap', $id);
        return $this->db->update('capacitaciones', $data);
    }

}
?>