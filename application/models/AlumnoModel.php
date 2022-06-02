<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlumnoModel extends CI_Model {

	/*-----Recupera una lista de alumnos */
	public function getAlumno(){
		$this->db->select('*');
		$this->db->from('alm_alumno a');
		
		$query = $this->db->get();
		return $query->result();

	}

	/* ----Recupera una lista de Grados para el select*/

	public function getGrado(){
		$this->db->select('*');
		$query = $this->db->get('grd_grado');
		return $query->result();
	}
	

	/*Guarda un alumno en la base de datos*/
	public function insertAlumno($datos){
		return($this->db->insert('alm_alumno', $datos)) ? true:false; 
	}

	/*Busca un alumno en especifico*/
	public function getAlumnoEdit($alm_id){
		$this->db->select('a.alm_id, a.alm_codigo, a.alm_nombre, a.alm_edad, a.alm_sexo, a.alm_id_grd, a.alm_observacion');
		$this->db->from('alm_alumno a');
		$this->db->where('alm_id ='. $alm_id);
		
		$query = $this->db->get();
		return $query->row();

	}

	public function updateAlumno($datos){
		$this->db->set('alm_codigo',$datos['alm_codigo']);
		$this->db->set('alm_nombre',$datos['alm_nombre']);
		$this->db->set('alm_edad',$datos['alm_edad']);
		$this->db->set('alm_sexo',$datos['alm_sexo']);
		$this->db->set('alm_id_grd',$datos['alm_id_grd']);
		$this->db->set('alm_observacion',$datos['alm_observacion']);
        $this->db->where('alm_id',$datos['alm_id']);
        if($this->db->update('alm_alumno'))
            return true;
        else
            return false;
	}


	public function deleteAlumno($alm_id){
    	$this->db->where('alm_id', $alm_id);
		if($this->db->delete('alm_alumno'))
			return true;
		else
			return false;
    }
} 