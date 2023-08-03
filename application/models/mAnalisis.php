<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function karyawan()
	{
		$this->db->select('*');
		$this->db->from('karyawan');
		$this->db->where('stat_analisis=0');
		return $this->db->get()->result();
	}
	public function insert_kriteria($data)
	{
		$this->db->insert('analisis', $data);
	}
	public function select_analisis()
	{
		$this->db->select('*');
		$this->db->from('analisis');
		$this->db->join('karyawan', 'analisis.id_karyawan = karyawan.id_karyawan', 'left');
		return $this->db->get()->result();
	}
}

/* End of file mAnalisis.php */
