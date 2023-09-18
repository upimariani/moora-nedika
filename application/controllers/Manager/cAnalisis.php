<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	public function index()
	{
		$data = array(
			'analisis' => $this->mAnalisis->select_analisis()
		);
		$this->load->view('Manager/Layouts/head');
		$this->load->view('Manager/Layouts/header');
		$this->load->view('Manager/Layouts/aside');
		$this->load->view('Manager/vAnalisis', $data);
		$this->load->view('Manager/Layouts/footer');
	}
}

/* End of file cAnalisis.php */
