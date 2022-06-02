<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IntermediaController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('IntermediaModel');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'ExamenPractico - Materia y Grados',
			'view' => 'materiasGrados',
			'data_view' => array()
		);

		$data['intermedia'] = $this->IntermediaModel->getIntermedia();
		$this->load->view('template/main', $data);
	}


	public function nuevoRegistro()
	{
		$data = array(
			'page_title' => 'ExamenPractico - Materia y Grados',
			'view' => 'materiasGradosRegistro',
			'data_view' => array()
		);

		$data['grado'] = $this->IntermediaModel->getGrado();
		$data['materia'] = $this->IntermediaModel->getMateria();

		$this->load->view('template/main', $data);
	}


	public function nuevoAlumnoMateria(){
		$datos = array(
			'mxg_id_grd' => $this->input->post('grd_id'),
			'mxg_id_mat' => $this->input->post('mat_id')
		);
	
		$this->IntermediaModel->insertAlumMate($datos);
		$this->index();
	}

	  
}
