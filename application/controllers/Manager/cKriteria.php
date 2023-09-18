<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKriteria extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKriteria');
	}

	public function index()
	{
		$data = array(
			'kriteria' => $this->mKriteria->select()
		);
		$this->load->view('Manager/Layouts/head');
		$this->load->view('Manager/Layouts/header');
		$this->load->view('Manager/Layouts/aside');
		$this->load->view('Manager/vKriteria', $data);
		$this->load->view('Manager/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'nama_kriteria' => $this->input->post('nama'),
			'range_awal' => $this->input->post('range_awal'),
			'range_akhir' => $this->input->post('range_akhir'),
			'type' => $this->input->post('type')
		);
		$this->mKriteria->insert($data);
		$this->session->set_flashdata('success', 'Data Kriteria Berhasil ditambahkan!');
		redirect('Manager/cKriteria');
	}
	public function update($id)
	{
		$data = array(
			'nama_kriteria' => $this->input->post('nama'),
			'range_awal' => $this->input->post('range_awal'),
			'range_akhir' => $this->input->post('range_akhir'),
			'type' => $this->input->post('type')
		);
		$this->mKriteria->update($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria Berhasil diperbaharui!');
		redirect('Manager/cKriteria');
	}
	public function delete($id)
	{
		$this->mKriteria->delete($id);
		$this->session->set_flashdata('success', 'Data Kriteria Berhasil Dihapus!');
		redirect('Manager/cKriteria');
	}
}

/* End of file cKriteria.php */
