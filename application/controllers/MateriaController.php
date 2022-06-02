<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MateriaController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MateriaModel');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'ExamenPractico - Materias',
			'view' => 'materia',
			'data_view' => array()
		);

		$data['materia'] = $this->MateriaModel->getMateria();
		$this->load->view('template/main', $data);

	}


	public function nuevaMateria(){
		$data = array(
			'page_title' => 'ExamenPractico - Nueva Materia',
			'view' => 'materiaRegistro',
			'data_view' => array()
		);

		$this->load->view('template/main', $data);
	}

	public function setMateria(){
		$datos = array(
			'mat_nombre' => $this->input->post('materia')
		);

		$this->MateriaModel->insertMateria($datos);
		$this->index();
	}

	public function editarMateria($mat_id){
		$data = array(
			'page_title' => 'ExamenPractico - Editar Materia',
			'view' => 'materiaEditar',
			'data_view' => array()
		);


		$data['materiaE'] = $this->MateriaModel->getMateriaEdit($mat_id);

		$this->load->view('template/main', $data);
	}

	public function setMateriaUpdate(){
		$datos = array(
			'mat_nombre' => $this->input->post('materia'),
			'mat_id' => $this->input->post('ma_id')
		);

		$this->MateriaModel->updateMateria($datos);
		$this->index();
	}

	public function borrarMateria($mat_id){

		$this->MateriaModel->deleteMateria($mat_id);
		$this->index();
	}
}
