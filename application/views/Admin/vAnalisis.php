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
					<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
						Tambah Data Analisis Karyawan
					</button>
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
											<th>Approved</th>
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
												<td><?php if ($value->approved == '0') {
													?>
														<span class="badge badge-danger">Belum Approved</span>
													<?php
													} ?>
												</td>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= base_url('Admin/cAnalisis/hitung') ?>" method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Data Karyawan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputEmail1" class="form-control-label">Nama Karyawan</label>
						<select class="form-control" name="karyawan" id="exampleSelect1" required>
							<option value="">---Pilih Karyawan---</option>
							<?php
							foreach ($karyawan as $key => $value) {
							?>
								<option value="<?= $value->id_karyawan ?>"><?= $value->nama_karyawan ?> | <?= $value->divisi ?> Jabatan. <?= $value->jabatan ?></option>
							<?php
							}
							?>

						</select>
					</div>
					<hr>
					<h4 for="exampleInputPassword1" class="form-control-label">Penilaian Karyawan</h4>
					<hr>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Absensi</label>
						<select class="form-control" name="absensi" id="exampleSelect1" required>
							<option value="">---Pilih Penilaian Absensi---</option>
							<option value="4">100% - 80%</option>
							<option value="3">81% - 70%</option>
							<option value="2">71% - 60%</option>
							<option value="1">61% - 50%</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Kedisiplinan Waktu</label>
						<select class="form-control" name="kedisiplinan" id="exampleSelect1" required>
							<option value="">---Pilih Penilaian Kedisiplinan Waktu---</option>
							<option value="4">Tidak Pernah Telat</option>
							<option value="3">1 x Telat</option>
							<option value="2">2 x Telat</option>
							<option value="1">>= 3 x Telat</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Target Hasil Kerja</label>
						<select class="form-control" name="target" id="exampleSelect1" required>
							<option value="">---Pilih Penilaian Target Hasil Kerja---</option>
							<option value="4">Selalu sesuai Target</option>
							<option value="3">1 x tidak sesuai</option>
							<option value="2">2 x tidak sesuai</option>
							<option value="1">>= 3 x tidak sesuai</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Masa Kerja</label>
						<select class="form-control" name="masa_kerja" id="exampleSelect1" required>
							<option value="">---Pilih Penilaian Masa Kerja---</option>
							<option value="4">>= 4 tahun</option>
							<option value="3">3 tahun</option>
							<option value="2">2 tahun</option>
							<option value="1">
								<= 1 tahun</option>
						</select>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</form>
	</div>
</div>