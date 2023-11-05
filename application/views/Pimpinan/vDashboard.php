<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<!-- Main content starts -->
	<div class="container-fluid">
		<div class="row">
			<div class="main-header">
				<h4>Dashboard</h4>
			</div>
		</div>
		<?php
		$karyawan = $this->db->query("SELECT COUNT(id_karyawan) as karyawan FROM `karyawan`")->row();
		$kriteria = $this->db->query("SELECT COUNT(id_kriteria) as kriteria FROM `kriteria`")->row();
		$user = $this->db->query("SELECT COUNT(id_user) as user FROM `user`")->row();
		$analisis = $this->db->query("SELECT COUNT(id_analisis) as analisis FROM `analisis`")->row();
		?>
		<!-- 4-blocks row start -->
		<div class="row dashboard-header">
			<div class="col-lg-3 col-md-6">
				<div class="card dashboard-product">
					<span>Karyawan</span>
					<h2 class="dashboard-total-products"><?= $karyawan->karyawan ?></h2>
					<span class="label label-warning">Karyawan</span>Jumlah Karyawan
					<div class="side-box">
						<i class="ti-signal text-warning-color"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card dashboard-product">
					<span>Sub Kriteria Penilaian</span>
					<h2 class="dashboard-total-products"><?= $kriteria->kriteria ?></h2>
					<span class="label label-primary">Metode MOORA</span>Kriteria Analisis
					<div class="side-box ">
						<i class="ti-gift text-primary-color"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card dashboard-product">
					<span>User</span>
					<h2 class="dashboard-total-products"><span><?= $user->user ?></span></h2>
					<span class="label label-success">User</span>Jumlah User
					<div class="side-box">
						<i class="ti-direction-alt text-success-color"></i>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="card dashboard-product">
					<span>Analisis</span>
					<h2 class="dashboard-total-products"><span><?= $analisis->analisis ?></span></h2>
					<span class="label label-danger">Analisis</span>Jumlah Analisis Karyawan
					<div class="side-box">
						<i class="ti-rocket text-danger-color"></i>
					</div>
				</div>
			</div>
		</div>
		<!-- 4-blocks row end -->
		<div class="row">
			<div class="col-12 col-lg-6">
				<div class="card flex-fill w-100">
					<div class="card-header">
						<h5 class="card-title">Peringkat Tahun 2022</h5>
						<!-- <h6 class="card-subtitle text-muted">A line chart is a way of plotting data points on a line.</h6> -->
					</div>
					<div class="card-body">
						<div class="chart">
							<canvas id="karyawan"></canvas>

						</div>

					</div>
				</div>
			</div>


		</div>
		<!-- 1-3-block row start -->
		<div class="row">

			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">Grafik Presentasi Kriteria Karyawan</h5>
					</div>
					<div class="card-block">
						<table id="myTable" class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Nama Karyawan</th>
									<th>Jenis Kelamin</th>
									<th>No Telepon</th>
									<th>Alamat</th>
									<th>Divisi</th>
									<th>Jabatan</th>
									<th>Periode</th>
									<th>Hasil</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								$periode = $this->db->query("SELECT tgl_proses, periode FROM `analisis` GROUP BY tgl_proses, periode")->result();
								foreach ($periode as $key => $value) {
									$rangking = $this->mDashboard->peringkat($value->tgl_proses, $value->periode);
									$hasil[] = $rangking->hasil;
									$nama[] = array(
										'nama_karyawan' => $rangking->nama_karyawan,
										'nilai' => $rangking->hasil
									);
								?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $rangking->nama_karyawan ?></td>
										<td><?= $rangking->jk ?></td>
										<td><?= $rangking->no_hp_karyawan ?></td>
										<td><?= $rangking->alamat_karyawan ?></td>
										<td><?= $rangking->divisi ?></td>
										<td><?= $rangking->jabatan ?></td>
										<td><?= $rangking->tgl_proses ?> Triwulan ke- <?= $rangking->periode ?></td>
										<td><?= $rangking->hasil ?></td>
									</tr>
								<?php
								}
								?>
							</tbody>
							<tfoot>
								<tr class="text-success">
									<td>&nbsp;</td>
									<td>Selamat Kepada</td>
									<td><strong><?php $juara = max($hasil);
												for ($i = 0; $i < sizeof($nama); $i++) {
													if ($juara == $nama[$i]['nilai']) {
														echo $nama[$i]['nama_karyawan'];
													}
												} ?></strong></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><?= $juara ?></td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>

		</div>
		<!-- 1-3-block row end -->


	</div>

</div>
</div>