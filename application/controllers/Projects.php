<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model'); 
		//$this->_cek_login();
	}
	
	public function index()
	{
		$this->load->view('projects/index');
	}

	public function listprojects($kode=0)
	{
		$kat = $this->model->GetCategory(" where id_category = $kode")->result_array();
		//$cat = $kat[0]['category'];
		$data = array(
			'model' => $this->model->viewproject($kode),
			'category' => $kat[0]['category'],
			//'product_view' => $this->model->GetProductView()->result_array(),
			//'nama' => $this->session->userdata('nama'),	
		);
		
		$this->load->view('projects/index', $data);
	}

}
