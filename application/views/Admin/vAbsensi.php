<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Absensi Karyawan</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Absensi Karyawan</a>
						</li>
					</ol>
					<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
						Tambah Data Absensi Karyawan
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
			<div class="col-sm-6">
				<!-- Basic Table starts -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">Informasi Absensi Karyawan</h5>
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-sm-6 table-responsive">
								<table id="myTable" class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Tanggal Absensi</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($tgl as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->tgl_absensi ?></td>
												<td> <a href="<?= base_url('Admin/cAbsensi/detail/' . $value->tgl_absensi) ?>" class="btn btn-success btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Detail Absensi Karyawan">
														<i class="icofont icofont-eye"></i>
													</a>
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
		<form action="<?= base_url('Admin/cAbsensi/create') ?>" method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Data Karyawan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Nama Karyawan</label>
						<select class="form-control" name="karyawan" id="exampleSelect1" required>
							<option value="">---Pilih Nama Karyawan---</option>
							<?php
							foreach ($karyawan as $key => $value) {
							?>
								<option value="<?= $value->id_karyawan ?>"><?= $value->nama_karyawan ?></option>
							<?php
							}
							?>

						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Tanggal Absensi</label>
						<input type="date" value="<?= date('Y-m-d') ?>" name="tgl" class="form-control" id="exampleInputPassword1" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Status Absensi</label>
						<select class="form-control" name="status" id="exampleSelect1" required>
							<option value="">---Pilih Status Kehadiran---</option>
							<option value="1">Hadir</option>
							<option value="2">Telat</option>
							<option value="3">Sakit</option>
							<option value="4">Alfa</option>
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