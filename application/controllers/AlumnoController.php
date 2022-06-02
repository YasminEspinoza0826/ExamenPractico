<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlumnoController extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		$this->load->model('AlumnoModel');
	}

	public function index(){
		$data = array(
			'page_title' => 'ExamenPractico - Alumnos',
			'view' => 'alumno',
			'data_view' => array()
		);
 
		$data['alumnoAll'] = $this->AlumnoModel->getAlumno();

		$this->load->view('template/main', $data);
	}

	public function nuevoAlumno(){
		$data = array(
			'page_title' => 'ExamenPractico - Nuevo Alumno',
			'view' => 'alumnoRegistro',
			'data_view' => array()
		);

		$data['gradoA'] = $this->AlumnoModel->getGrado();

		$this->load->view('template/main', $data);
	}

	public function setAlumno(){
		
		$datos = array(
			'alm_codigo' => $this->input->post('codigo'),
			'alm_nombre' => $this->input->post('nombre'),
			'alm_edad' => $this->input->post('edad'),
			'alm_sexo' => $this->input->post('sexo'),
			'alm_id_grd' => $this->input->post('grd_id'),
			'alm_observacion' => $this->input->post('observacion')
		);

		$this->AlumnoModel->insertAlumno($datos);
		$this->index();


	}

	public function editarAlumno($alm_id){
		$data = array(
			'page_title' => 'ExamenPractico - Editar Alumno',
			'view' => 'alumnoEditar',
			'data_view' => array()
		);

		$data['alumnoE'] = $this->AlumnoModel->getAlumnoEdit($alm_id);
		$this->load->view('template/main', $data);

	}

	public function actualizarAlumno(){
		
		$datos = array(
			'alm_id' => $this->input->post('alm_id'),
			'alm_codigo' => $this->input->post('codigo'),
			'alm_nombre' => $this->input->post('nombre'),
			'alm_edad' => $this->input->post('edad'),
			'alm_sexo' => $this->input->post('sexo'),
			'alm_id_grd' => $this->input->post('grd_id'),
			'alm_observacion' => $this->input->post('observacion')
		);

		$this->AlumnoModel->updateAlumno($datos);
		$this->index();


	}
	
	public function borrarAlumno($alm_id){
		$this->AlumnoModel->deleteAlumno($alm_id);
		$this->index();
	}
}