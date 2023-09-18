<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mKriteria extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('kriteria', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('kriteria');
		return $this->db->get()->result();
	}
	public function update($id, $data)
	{
		$this->db->where('id_kriteria', $id);
		$this->db->update('kriteria', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_kriteria', $id);
		$this->db->delete('kriteria');
	}
}

/* End of file mKriteria.php */
