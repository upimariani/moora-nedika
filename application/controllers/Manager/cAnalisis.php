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
			'periode' => $this->mAnalisis->periode()
		);
		$this->load->view('Manager/Layouts/head');
		$this->load->view('Manager/Layouts/header');
		$this->load->view('Manager/Layouts/aside');
		$this->load->view('Manager/vPeriodeAnalisis', $data);
		$this->load->view('Manager/Layouts/footer');
	}
	public function detail_analisis($tgl_proses, $periode)
	{
		$data = array(
			'karyawan' => $this->mAnalisis->karyawan(),
			'analisis' => $this->mAnalisis->select_analisis($tgl_proses, $periode)
		);
		$this->load->view('Manager/Layouts/head');
		$this->load->view('Manager/Layouts/header');
		$this->load->view('Manager/Layouts/aside');
		$this->load->view('Manager/vAnalisis', $data);
		$this->load->view('Manager/Layouts/footer');
	}
	public function hitung()
	{
		// $data = array(
		// 	'id_karyawan' => $this->input->post('karyawan'),
		// 	'id_user' => '1',
		// 	'tgl_proses' => date('Y-m-d'),
		// 	'absensi' => $this->input->post('absensi'),
		// 	'masa_kerja' => $this->input->post('masa_kerja'),
		// 	'kedisiplinan' => $this->input->post('kedisiplinan'),
		// 	'target_kerja' => $this->input->post('target'),
		// 	'hasil' => '0',
		// 	'approved' => '0',
		// );
		// $this->mAnalisis->insert_kriteria($data);

		$periode = $this->input->post('periode');
		if ($periode == '1') {
			$periode_awal = 0;
			$periode_akhir = 3;
		} else if ($periode == '2') {
			$periode_awal = 3;
			$periode_akhir = 6;
		} else if ($periode == '3') {
			$periode_awal = 6;
			$periode_akhir = 9;
		} else if ($periode == '4') {
			$periode_awal = 9;
			$periode_akhir = 12;
		}




		$karyawan = $this->mAnalisis->karyawan_all();
		foreach ($karyawan as $key => $value) {
			// variabel
			$variabel = $this->mAnalisis->variabel($periode_awal, $periode_akhir, $value->id_karyawan);
			// echo $variabel['terlambat']->jml . '|' . $variabel['absensi']->jml . '|' . $variabel['target_kerja']->jml . '|' . $variabel['lama_kerja']->tgl;
			// echo $value->id_karyawan;
			// echo '<br>';
			$id_karyawan[] = $value->id_karyawan;


			//variabel array
			$absensi[] = $variabel['absensi']->jml;
			$terlambat[] = $variabel['terlambat']->jml;
			$target_kerja[] = $variabel['target_kerja']->jml;
			$lama_kerja[] = $variabel['lama_kerja']->tgl;
		}

		for ($var = 0; $var < sizeof($absensi); $var++) {
			//variabel absensi
			$percent_absensi = round(($absensi[$var] / 90) * 100);
			if ($percent_absensi <= 100 && $percent_absensi >= 80) {
				$c1[] = '4';
			} else if ($percent_absensi <= 81 && $percent_absensi >= 70) {
				$c1[] = '3';
			} else if ($percent_absensi <= 71 && $percent_absensi >= 60) {
				$c1[] = '2';
			} else if ($percent_absensi <= 61 && $percent_absensi >= 50) {
				$c1[] = '1';
			}


			//variabel telat/kedisiplinan
			if ($terlambat[$var] <= 10) {
				$c2[] = '4';
			} else if ($terlambat[$var] <= 20) {
				$c2[] = '3';
			} else if ($terlambat[$var] <= 30) {
				$c2[] = '2';
			} else if ($terlambat[$var] > 30) {
				$c2[] = '1';
			}

			//variabel hasil kerja / tidak sesuai target
			if ($target_kerja[$var] <= 20) {
				$c3[] = '4';
			} else if ($target_kerja[$var] <= 40) {
				$c3[] = '3';
			} else if ($target_kerja[$var] <= 60) {
				$c3[] = '2';
			} else if ($target_kerja[$var] > 60) {
				$c3[] = '1';
			}

			//variabel lama kerja

			if ($lama_kerja[$var] >= 1081 && $lama_kerja[$var] >= 1440 && $lama_kerja < 1440) {
				$c4[] = '4';
			} else if ($lama_kerja[$var] >= 721 && $lama_kerja[$var] <= 1080) {
				$c4[] = '3';
			} else if ($lama_kerja[$var] >= 361 && $lama_kerja[$var] <= 720) {
				$c4[] = '2';
			} else if ($lama_kerja[$var] <= 360) {
				$c4[] = '1';
			}
		}


		//pada c1 -----------------------------------
		$norm_c1 = 0;
		for ($a = 0; $a < sizeof($c1); $a++) {
			$norm_c1 += pow($c1[$a], 2);
		}
		// echo $norm_c1;
		// echo '<br>';

		//akar kuadrat
		$c1_kuadrat = sqrt($norm_c1);
		// echo $c1_kuadrat;
		// echo '<br>';
		//x1
		for ($b = 0; $b < sizeof($c1); $b++) {
			$x1[] = pow($c1[$b], 2) / $c1_kuadrat;
		}





		//pada c2-----------------------------------------
		$norm_c2 = 0;
		for ($e = 0; $e < sizeof($c2); $e++) {
			$norm_c2 += pow($c2[$e], 2);
		}
		// echo $norm_c2;
		// echo '<br>';

		//akar kuadrat
		$c2_kuadrat = sqrt($norm_c2);
		// echo $c2_kuadrat;
		// echo '<br>';
		//x2
		for ($f = 0; $f < sizeof($c2); $f++) {
			$x2[] = pow($c2[$f], 2) / $c2_kuadrat;
		}

		//pada c3------------------------------------------
		$norm_c3 = 0;
		for ($g = 0; $g < sizeof($c3); $g++) {
			$norm_c3 += pow($c3[$g], 2);
		}
		// echo $norm_c3;
		// echo '<br>';
		//akar kuadrat
		$c3_kuadrat = sqrt($norm_c3);
		// echo $c3_kuadrat;
		// echo '<br>';
		//x3
		for ($h = 0; $h < sizeof($c3); $h++) {
			$x3[] = pow($c3[$h], 2) / $c3_kuadrat;
		}

		//pada c4 ------------------------------------------
		$norm_c4 = 0;
		for ($i = 0; $i < sizeof($c4); $i++) {
			$norm_c4 += pow($c4[$i], 2);
		}

		// echo $norm_c4;
		// echo '<br>';
		//akar kuadrat
		$c4_kuadrat = sqrt($norm_c4);
		// echo $c4_kuadrat;
		// echo '<br>';
		//x4
		for ($j = 0; $j < sizeof($c4); $j++) {
			$x4[] = pow($c4[$j], 2) / $c4_kuadrat;
		}

		//hasil nilai optimasi, jumlah perkalian bobot kriteria-------------------
		//c1 = 30;  c3=25; c4=30; c5=15

		for ($k = 0; $k < sizeof($x1); $k++) {
			// echo $x1[$k] . ' | ' . $x3[$k] . ' | ' . $x4[$k] . ' | ' . $x5[$k];
			// echo '<br>';
			$ac = round(($x1[$k] * 0.3) + ($x2[$k] * 0.25) + ($x3[$k] * 0.3) + ($x4[$k] * 0.15), 4);
			// echo $ac . '|' . $id_karyawan[$k];
			// echo '<br>';

			$data = array(
				'id_karyawan' => $id_karyawan[$k],
				'id_user' => '1',
				'tgl_proses' => '2022-12-03',
				'periode' => $periode,
				'absensi' => $c1[$k],
				'masa_kerja' => $c4[$k],
				'kedisiplinan' => $c2[$k],
				'target_kerja' => $c3[$k],
				'hasil' => $ac
			);
			$this->db->insert('analisis', $data);
		}
		$this->session->set_flashdata('success', 'Data Analisis Berhasil Disimpan!');
		redirect('Manager/cAnalisis');
	}
	public function hapus($year, $periode)
	{
		$this->db->where('YEAR(tgl_proses)', $year);
		$this->db->where('periode', $periode);
		$this->db->delete('analisis');
		$this->session->set_flashdata('success', 'Analisis Berhasil Dihapus!');
		redirect('Manager/cAnalisis');
	}
}

/* End of file cAnalisis.php */
