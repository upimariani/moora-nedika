<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKaryawan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKaryawan');
	}


	public function index()
	{
		$data = array(
			'karyawan' => $this->mKaryawan->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vKaryawan', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'nama_karyawan' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'no_hp_karyawan' => $this->input->post('no_hp'),
			'alamat_karyawan' => $this->input->post('alamat'),
			'divisi' => $this->input->post('divisi'),
			'jabatan' => $this->input->post('jabatan'),
			'tgl_mulai' => $this->input->post('tgl_mulai'),
			'stat_analisis' => '0'
		);
		$this->mKaryawan->insert($data);
		$this->session->set_flashdata('success', 'Data Karyawan Berhasil Disimpan!');
		redirect('Admin/cKaryawan');
	}
	public function update($id)
	{
		$data = array(
			'nama_karyawan' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'no_hp_karyawan' => $this->input->post('no_hp'),
			'alamat_karyawan' => $this->input->post('alamat'),
			'divisi' => $this->input->post('divisi'),
			'jabatan' => $this->input->post('jabatan'),
			'tgl_mulai' => $this->input->post('tgl_mulai'),
			'stat_analisis' => '0'
		);
		$this->mKaryawan->update($id, $data);
		$this->session->set_flashdata('success', 'Data Karyawan Berhasil Diperbaharui!');
		redirect('Admin/cKaryawan');
	}
	public function delete($id)
	{
		$this->mKaryawan->delete($id);
		$this->session->set_flashdata('success', 'Data Karyawan Berhasil Dihapus!');
		redirect('Admin/cKaryawan');
	}
}

/* End of file cKaryawan.php */
