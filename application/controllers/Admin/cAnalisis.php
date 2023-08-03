<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	public function index()
	{
		$data = array(
			'karyawan' => $this->mAnalisis->karyawan(),
			'analisis' => $this->mAnalisis->select_analisis()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/Layouts/aside');
		$this->load->view('Admin/vAnalisis', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function hitung()
	{
		$data = array(
			'id_karyawan' => $this->input->post('karyawan'),
			'id_user' => '1',
			'tgl_proses' => date('Y-m-d'),
			'absensi' => $this->input->post('absensi'),
			'kualitas_kerja' => $this->input->post('kedisiplinan'),
			'masa_kerja' => $this->input->post('masa_kerja'),
			'kepribadian' => $this->input->post('kepribadian'),
			'target_kerja' => $this->input->post('target'),
			'hasil' => '0',
			'approved' => '0',
		);
		$this->mAnalisis->insert_kriteria($data);


		$c1 = array();
		$c2 = array();
		$c3 = array();
		$c4 = array();
		$c5 = array();
		$data_analisis = $this->mAnalisis->select_analisis();
		foreach ($data_analisis as $key => $value) {
			$id_karyawan[] = $value->id_karyawan;
			$c1[] = $value->absensi;
			$c2[] = $value->kualitas_kerja;
			$c3[] = $value->target_kerja;
			$c4[] = $value->masa_kerja;
			$c5[] = $value->kepribadian;
		}

		//pada c1 -----------------------------------
		$norm_c1 = 0;
		for ($a = 0; $a < sizeof($c1); $a++) {
			$norm_c1 += pow($c1[$a], 2);
		}
		//akar kuadrat
		$c1_kuadrat = sqrt($norm_c1);

		//x1
		for ($b = 0; $b < sizeof($c1); $b++) {
			$x1[] = $c1[$b] / $c1_kuadrat;
		}


		//pada c2---------------------------------------
		$norm_c2 = 0;
		for ($c = 0; $c < sizeof($c2); $c++) {
			$norm_c2 += pow($c2[$c], 2);
		}
		//akar kuadrat
		$c2_kuadrat = sqrt($norm_c2);

		//x2
		for ($d = 0; $d < sizeof($c2); $d++) {
			$x2[] = $c2[$d] / $c2_kuadrat;
		}


		//pada c3-----------------------------------------
		$norm_c3 = 0;
		for ($e = 0; $e < sizeof($c3); $e++) {
			$norm_c3 += pow($c3[$e], 2);
		}
		//akar kuadrat
		$c3_kuadrat = sqrt($norm_c3);

		//x3
		for ($f = 0; $f < sizeof($c3); $f++) {
			$x3[] = $c3[$f] / $c3_kuadrat;
		}

		//pada c4------------------------------------------
		$norm_c4 = 0;
		for ($g = 0; $g < sizeof($c4); $g++) {
			$norm_c4 += pow($c4[$g], 2);
		}
		//akar kuadrat
		$c4_kuadrat = sqrt($norm_c4);

		//x4
		for ($h = 0; $h < sizeof($c4); $h++) {
			$x4[] = $c4[$h] / $c4_kuadrat;
		}

		//pada c5 ------------------------------------------
		$norm_c5 = 0;
		for ($i = 0; $i < sizeof($c5); $i++) {
			$norm_c5 += pow($c5[$i], 2);
		}
		//akar kuadrat
		$c5_kuadrat = sqrt($norm_c5);

		//x5
		for ($j = 0; $j < sizeof($c5); $j++) {
			$x5[] = $c5[$j] / $c5_kuadrat;
		}

		//hasil nilai optimasi, jumlah perkalian bobot kriteria
		//c1 = 30; c2=25; c3=20; c4=15; c5=10

		for ($k = 0; $k < sizeof($x1); $k++) {
			// echo $x1[$k] . ' | ' . $x2[$k] . ' | ' . $x3[$k] . ' | ' . $x4[$k] . ' | ' . $x5[$k];
			// echo '<br>';
			$ac = round(($x1[$k] * 0.30) + ($x2[$k] * 0.25) + ($x3[$k] * 0.20) + ($x4[$k] * 0.15) + ($x5[$k] * 0.10), 4);
			$data = array(
				'id_karyawan' => $id_karyawan[$k],
				'hasil' => $ac
			);
			$this->db->where('id_karyawan', $id_karyawan[$k]);
			$this->db->update('analisis', $data);

			$status_analisis = array(
				'stat_analisis' => '1'
			);
			$this->db->where('id_karyawan', $id_karyawan[$k]);
			$this->db->update('karyawan', $status_analisis);
		}
		$this->session->set_flashdata('success', 'Data Analisis Berhasil Disimpan!');
		redirect('Admin/cAnalisis');
	}
}

/* End of file cAnalisis.php */
