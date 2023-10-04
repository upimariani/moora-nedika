<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAbsensi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAbsensi');
		$this->load->model('mKaryawan');
	}

	public function index()
	{
		$data = array(
			'tgl' => $this->mAbsensi->tgl(),
			'karyawan' => $this->mKaryawan->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vAbsensi', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'id_karyawan' => $this->input->post('karyawan'),
			'tgl_absensi' => $this->input->post('tgl'),
			'status' => $this->input->post('status')
		);
		$this->mAbsensi->insert($data);
		$this->session->set_flashdata('success', 'Absnsi Karyawan berhasil disimpan!');
		redirect('Admin/cAbsensi');
	}
	public function detail($tgl)
	{
		$data = array(
			'absen' => $this->mAbsensi->select_absensi($tgl),
			'karyawan' => $this->mKaryawan->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vDetailAbsensi', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function update($id_absensi)
	{
		$data = array(
			'id_karyawan' => $this->input->post('karyawan'),
			'tgl_absensi' => $this->input->post('tgl'),
			'status' => $this->input->post('status')
		);
		$this->mAbsensi->update($id_absensi, $data);
		$this->session->set_flashdata('success', 'Absensi Karyawan berhasil diperbaharui!');
		redirect('Admin/cAbsensi');
	}
	public function delete($id_absensi)
	{
		$this->mAbsensi->delete($id_absensi);
		$this->session->set_flashdata('success', 'Absensi Karyawan berhasil dihapus!');
		redirect('Admin/cAbsensi');
	}
}

/* End of file cAbsensi.php */
