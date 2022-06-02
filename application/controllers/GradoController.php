<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GradoController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('GradoModel');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'ExamenPractico - Grados',
			'view' => 'grado',
			'data_view' => array()
		);

		$data['grado'] = $this->GradoModel->getGrado();

		$this->load->view('template/main', $data);

	}

	public function nuevoGrado(){

		$data = array(
			'page_title' => 'ExamenPractico - Nuevo Grado',
			'view' => 'gradoRegistro',
			'data_view' => array()
		);

		$this->load->view('template/main', $data);
	}

	public function setGrado(){
		$datos = array(
			'grd_nombre' => $this->input->post('grado')
		);

		$this->GradoModel->insertGrado($datos);
		$this->index();
	}


	public function editarGrado($grd_id){
		$data = array(
			'page_title' => 'ExamenPractico - Editar Grado',
			'view' => 'gradoEditar',
			'data_view' => array()
		);

		$data['gradoE'] = $this->GradoModel->getGradoEdit($grd_id);
		$this->load->view('template/main', $data);
	}


	public function actualizarGrado(){
		$datos = array(
			'grd_nombre' => $this->input->post('grado'),
			'grd_id' => $this->input->post('grd_id')
		);

		$this->GradoModel->updateGrado($datos);
		$this->index();
	}

	public function borrarGrado($grd_id){
		$this->GradoModel->deleteGrado($grd_id);
		$this->index();
	}

}
