<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MateriaModel extends CI_Model {


	/* -------Recupera todas las materias ------*/
	public function getMateria(){
		$query = $this->db->get('mat_materia');
		return $query->result();
	}

	/* Guarda una materia en la base de datos*/
	public function insertMateria($datos){
		return($this->db->insert('mat_materia',$datos)) ? true:false; 
	}


	/* ---------Trae una materia especifica*/
	public function getMateriaEdit($mat_id){
		$this->db->select('*');
		$this->db->from('mat_materia');
		$this->db->where('mat_id =' .$mat_id);
		$query = $this->db->get();
		return  $query->row()  ;
	}

	/*------------------ACTUALIZAR ---------------*/
	 public function updateMateria($datos)
    {
        $this->db->set('mat_nombre',$datos['mat_nombre']);
        $this->db->where('mat_id',$datos['mat_id']);
        if($this->db->update('mat_materia'))
            return true;
        else
            return false;
    }

    /*---------------Elimina una materia-----------*/

    public function deleteMateria($mat_id){
    	$this->db->where('mat_id', $mat_id);
		if($this->db->delete('mat_materia'))
			return true;
		else
			return false;
    }
}
