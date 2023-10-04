<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTargetKerja extends CI_Model
{
	public function tgl()
	{
		$this->db->select('*');
		$this->db->from('target_kerja');
		$this->db->group_by('tgl_kerja');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('target_kerja', $data);
	}
	public function detail_target($tgl)
	{
		$this->db->select('*');
		$this->db->from('target_kerja');
		$this->db->join('karyawan', 'target_kerja.id_karyawan = karyawan.id_karyawan', 'left');
		$this->db->where('tgl_kerja', $tgl);
		return $this->db->get()->result();
	}
	public function update($id, $data)
	{
		$this->db->where('id_target_kerja', $id);
		$this->db->update('target_kerja', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_target_kerja', $id);
		$this->db->delete('target_kerja');
	}
}

/* End of file mTargetKerja.php */
