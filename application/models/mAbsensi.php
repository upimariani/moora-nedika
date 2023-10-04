<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAbsensi extends CI_Model
{
	public function tgl()
	{
		$this->db->select('*');
		$this->db->from('absensi');
		$this->db->group_by('tgl_absensi');
		return $this->db->get()->result();
	}
	public function insert($data)
	{
		$this->db->insert('absensi', $data);
	}
	public function select_absensi($tgl)
	{
		$this->db->select('*');
		$this->db->from('absensi');
		$this->db->join('karyawan', 'absensi.id_karyawan = karyawan.id_karyawan', 'left');
		$this->db->where('tgl_absensi', $tgl);
		return $this->db->get()->result();
	}
	public function update($id_absensi, $data)
	{
		$this->db->where('id_absensi', $id_absensi);
		$this->db->update('absensi', $data);
	}
	public function delete($id_absensi)
	{
		$this->db->where('id_absensi', $id_absensi);
		$this->db->delete('absensi');
	}
}

/* End of file mAbsensi.php */
