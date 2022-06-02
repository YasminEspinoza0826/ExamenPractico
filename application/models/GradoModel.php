<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GradoModel extends CI_Model {

	/*Recupera todos los grados*/
	public function getGrado(){
		$query = $this->db->get('grd_grado');
		return $query->result();

	}

	/*Guarda el grado en la base de datos*/
	public function insertGrado($datos){
		return($this->db->insert('grd_grado',$datos)) ? true:false; 
	}


	/*Recupera un grado en especifico*/
	public function getGradoEdit($grd_id){
		$this->db->select('*');
		$this->db->from('grd_grado');
		$this->db->where('grd_id =' .$grd_id);
		$query = $this->db->get();
		return  $query->row();
	}


	/*Actualiza un grado*/
	public function updateGrado($datos)
    {
        $this->db->set('grd_nombre',$datos['grd_nombre']);
        $this->db->where('grd_id',$datos['grd_id']);
        if($this->db->update('grd_grado'))
            return true;
        else
            return false;
    }


    /*Elimina un grado*/
    public function deleteGrado($grd_id){
    	$this->db->where('grd_id', $grd_id);
		if($this->db->delete('grd_grado'))
			return true;
		else
			return false;
    }
}
