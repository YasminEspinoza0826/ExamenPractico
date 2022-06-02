<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IntermediaModel extends CI_Model {

	public function getIntermedia(){

		$this->db->select('a.mxg_id, c.alm_nombre, b.grd_nombre, d.mat_nombre');
		$this->db->from('mxg_materiasxgrado a');
		$this->db->join('grd_grado b', 'a.mxg_id_grd = b.grd_id');
		$this->db->join('alm_alumno c','b.grd_id = c.alm_id');
		$this->db->join('mat_materia d', 'a.mxg_id_grd = d.mat_id');
		$query = $this->db->get();
		return $query->result();

	}

	public function getGrado(){
		$query = $this->db->get('grd_grado');
		return $query->result();

	}

	public function getMateria(){
		$query = $this->db->get('mat_materia');
		return $query->result();
	}

	public function insertAlumMate($datos){
		return($this->db->insert('mxg_materiasxgrado',$datos)) ? true:false; 
	}
	  
}
