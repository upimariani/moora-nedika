<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function karyawan_all()
	{
		return  $this->db->query("SELECT * FROM `karyawan`")->result();
	}
	public function periode()
	{
		return $this->db->query("SELECT YEAR(tgl_proses) as year, periode, tgl_proses FROM `analisis` GROUP BY YEAR(tgl_proses), periode")->result();
	}
	//variabel perhitungan
	public function variabel($periode_awal, $periode_akhir, $id_karyawan)
	{
		$data['lama_kerja'] = $this->db->query("SELECT DATEDIFF('2023-10-01', tgl_mulai) as tgl FROM karyawan WHERE id_karyawan='" . $id_karyawan . "'")->row();
		$data['absensi'] = $this->db->query("SELECT COUNT(id_absensi) as jml, id_karyawan, MONTH(tgl_absensi) as tgl FROM `absensi` WHERE MONTH(tgl_absensi) <= '" . $periode_akhir . "' AND MONTH(tgl_absensi) > '" . $periode_awal . "' AND status='1' AND id_karyawan='" . $id_karyawan . "'")->row();
		$data['target_kerja'] = $this->db->query("SELECT COUNT(id_target_kerja) as jml, id_karyawan, MONTH(tgl_kerja) as tgl FROM `target_kerja` WHERE MONTH(tgl_kerja) <= '" . $periode_akhir . "' AND MONTH(tgl_kerja) > '" . $periode_awal . "' AND status_target='1' AND id_karyawan='" . $id_karyawan . "'")->row();
		$data['terlambat'] = $this->db->query("SELECT COUNT(id_absensi) as jml, id_karyawan, MONTH(tgl_absensi) as tgl FROM `absensi` WHERE MONTH(tgl_absensi) <= '" . $periode_akhir . "' AND MONTH(tgl_absensi) > '" . $periode_awal . "' AND status='2' AND id_karyawan='" . $id_karyawan . "'")->row();
		return $data;
	}
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
	public function select_analisis($tgl_proses, $periode)
	{
		$this->db->select('*');
		$this->db->from('analisis');
		$this->db->join('karyawan', 'analisis.id_karyawan = karyawan.id_karyawan', 'left');
		$this->db->where('tgl_proses', $tgl_proses);
		$this->db->where('periode', $periode);
		$this->db->order_by('hasil', 'desc');



		return $this->db->get()->result();
	}
}

/* End of file mAnalisis.php */
