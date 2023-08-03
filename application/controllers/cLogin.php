<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}

	public function index()
	{
		$this->load->view('vLogin');
	}
	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = $this->mLogin->login($username, $password);
		if ($data) {
			if ($data->level_user == '1') {

				redirect('Admin/cDashboard', 'refresh');
			} else {
				redirect('Pimpinan/cDashboard', 'refresh');
			}
		} else {
			$this->session->set_flashdata('error', 'Username dan Password Anda Salah!');
			redirect('cLogin');
		}
	}
	public function logout()
	{
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!');
		redirect('cLogin');
	}
}

/* End of file cLogin.php */
