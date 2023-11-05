<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
	public function peringkat($year, $periode)
	{
		return $this->db->query("SELECT tgl_proses, periode, nama_karyawan, jk, no_hp_karyawan, alamat_karyawan, divisi, jabatan, hasil FROM `analisis` JOIN karyawan ON karyawan.id_karyawan=analisis.id_karyawan WHERE tgl_proses = '" . $year . "' AND periode='" . $periode . "' ORDER BY hasil DESC limit 1")->row();
	}
}

/* End of file mDashboard.php */
