<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Analisis Metode MOORA Karyawan Terbaik</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Analisis</a>
						</li>
					</ol>

				</div>
				<?php
				if ($this->session->userdata('success') != '') {
				?>
					<div class="alert alert-success" role="alert">
						<?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
			</div>
		</div>
		<!-- Header end -->

		<!-- Tables start -->
		<!-- Row start -->
		<div class="row">
			<div class="col-sm-12">
				<!-- Basic Table starts -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">Informasi Hasil Analisis Metode MOORA</h5>
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-sm-12 table-responsive">
								<table id="myTable" class="table table-hover">
									<thead>
										<tr>
											<th>&nbsp;</th>
											<th>&nbsp;</th>
											<th>&nbsp;</th>
											<th colspan="4" class="text-center">Bobot Kriteria</th>
											<th></th>
										</tr>
										<tr>
											<th>#</th>
											<th>Nama Karyawan</th>
											<th>Tanggal Proses</th>
											<th>Absensi</th>
											<th>Masa Kerja</th>
											<th>Kedisiplinan Waktu</th>
											<th>Target Kerja</th>
											<th>Hasil</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($analisis as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->nama_karyawan ?></td>
												<td><?= $value->tgl_proses ?></td>
												<td><?= $value->absensi ?></td>
												<td><?= $value->masa_kerja ?></td>
												<td><?= $value->kedisiplinan ?></td>
												<td><?= $value->target_kerja ?></td>
												<td><?= $value->hasil ?></td>

											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Basic Table ends -->
			</div>
		</div>
		<!-- Row end -->
		<!-- Tables end -->
	</div>

	<!-- Container-fluid ends -->
</div>