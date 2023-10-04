<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTargetKerja extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTargetKerja');
		$this->load->model('mKaryawan');
	}
	public function index()
	{
		$data = array(
			'tgl' => $this->mTargetKerja->tgl(),
			'karyawan' => $this->mKaryawan->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vTargetKerja', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'id_karyawan' => $this->input->post('karyawan'),
			'tgl_kerja' => $this->input->post('tgl'),
			'status_target' => $this->input->post('status')
		);
		$this->mTargetKerja->insert($data);
		$this->session->set_flashdata('success', 'Target Kerja Karyawan berhasil disimpan!');
		redirect('Admin/cTargetKerja');
	}
	public function detail($tgl)
	{
		$data = array(
			'target' => $this->mTargetKerja->detail_target($tgl),
			'karyawan' => $this->mKaryawan->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vDetailTargetKerja', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function update($id)
	{
		$data = array(
			'id_karyawan' => $this->input->post('karyawan'),
			'tgl_kerja' => $this->input->post('tgl'),
			'status_target' => $this->input->post('status')
		);
		$this->mTargetKerja->update($id, $data);
		$this->session->set_flashdata('success', 'Target Kerja Karyawan berhasil diupdate!');
		redirect('Admin/cTargetKerja');
	}
	public function delete($id)
	{
		$this->mTargetKerja->delete($id);
		$this->session->set_flashdata('success', 'Target Kerja Karyawan berhasil dihapus!');
		redirect('Admin/cTargetKerja');
	}
}

/* End of file cTargetKerja.php */
