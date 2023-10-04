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
		$this->load->view('Pimpinan/Layouts/head');
		$this->load->view('Pimpinan/Layouts/header');
		$this->load->view('Pimpinan/Layouts/aside');
		$this->load->view('Pimpinan/vPeriodeAnalisis', $data);
		$this->load->view('Pimpinan/Layouts/footer');
	}
	public function detail_analisis($tgl_proses, $periode)
	{
		$data = array(
			'karyawan' => $this->mAnalisis->karyawan(),
			'analisis' => $this->mAnalisis->select_analisis($tgl_proses, $periode)
		);
		$this->load->view('Pimpinan/Layouts/head');
		$this->load->view('Pimpinan/Layouts/header');
		$this->load->view('Pimpinan/Layouts/aside');
		$this->load->view('Pimpinan/vAnalisis', $data);
		$this->load->view('Pimpinan/Layouts/footer');
	}
	public function cetak($tgl_proses, $periode)
	{
		// memanggil library FPDF
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);

		$pdf->Cell(200, 40, 'LAPORAN HASIL ANALISIS KARYAWAN TERBAIK PERIODE TRIWULAN ' . $periode, 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'No', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Nama Karyawan', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Jenis Kelamin', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Bagian/Divisi', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Hasil', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;

		$data = $this->mAnalisis->select_analisis($tgl_proses, $periode);
		foreach ($data as $key => $value) {
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->nama_karyawan, 1, 0);
			$pdf->Cell(50, 6, $value->jk, 1, 0);
			$pdf->Cell(40, 6, $value->divisi, 1, 0);
			$pdf->Cell(40, 6, $value->hasil, 1, 1);
		}
		$pdf->Output();
	}
}

/* End of file cAnalisis.php */
