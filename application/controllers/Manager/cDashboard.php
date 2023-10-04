<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDashboard');
	}
	public function index()
	{
		$this->load->view('Manager/Layouts/head');
		$this->load->view('Manager/Layouts/header');
		$this->load->view('Manager/Layouts/aside');
		$this->load->view('Manager/vDashboard');
		$this->load->view('Manager/Layouts/footer');
	}
}

/* End of file cDashboard.php */
