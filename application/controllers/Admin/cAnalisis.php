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
			'periode' => $this->mAnalisis->periode()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vPeriodeAnalisis', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function detail_analisis($tgl_proses, $periode)
	{
		$data = array(
			'karyawan' => $this->mAnalisis->karyawan(),
			'analisis' => $this->mAnalisis->select_analisis($tgl_proses, $periode)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vAnalisis', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	
}

/* End of file cAnalisis.php */
