<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Kriteria Penilaian</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Kriteria</a>
						</li>
					</ol>
					<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
						Tambah Data Kriteria
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
						<h5 class="card-header-text">Informasi Data Kriteria</h5>
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-sm-12 table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Kriteria</th>
											<th>Range Awal</th>
											<th>Range Akhir</th>
											<th>Type</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($kriteria as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->nama_kriteria ?></td>
												<td><?= $value->range_awal ?></td>
												<td><?= $value->range_akhir ?></td>
												<td><?php if ($value->type == '1') {
													?>
														<label class="label bg-success">Absensi</label>
													<?php
													} else if ($value->type == '2') {
													?>
														<label class="label bg-warning">Kedisiplinan Waktu</label>
													<?php
													} else if ($value->type == '3') {
													?>
														<label class="label bg-info">Hasil Kerja</label>
													<?php
													} else if ($value->type == '4') {
													?>
														<label class="label bg-primary">Masa Kerja</label>
													<?php
													} ?>
												</td>
												<td> <a href="<?= base_url('Manager/cKriteria/delete/' . $value->id_kriteria) ?>" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Hapus">
														<i class="icofont icofont-trash"></i>
													</a>
													<button type="button" data-toggle="modal" data-target="#edit<?= $value->id_kriteria ?>" class="btn btn-warning btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
														<i class="icofont icofont-edit"></i>
													</button>
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
		<form action="<?= base_url('Manager/cKriteria/create') ?>" method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Data Kriteria</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputEmail1" class="form-control-label">Nama Kriteria</label>
						<input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Kriteria" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Range Awal</label>
						<input type="text" name="range_awal" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Range Awal" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Range Akhir</label>
						<input type="text" name="range_akhir" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Range Akhir" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Type Kriteria</label>
						<select class="form-control" name="type" id="exampleSelect1" required>
							<option value="">---Pilih Type Kriteria---</option>
							<option value="1">Absensi</option>
							<option value="2">Kedisiplinan Waktu</option>
							<option value="3">Hasil Kerja</option>
							<option value="4">Masa Kerja</option>
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
<?php
foreach ($kriteria as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_kriteria ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('Manager/cKriteria/update/' . $value->id_kriteria) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Data Kriteria</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-control-label">Nama Kriteria</label>
							<input type="text" value="<?= $value->nama_kriteria ?>" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Kriteria" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Range Awal</label>
							<input type="text" name="range_awal" value="<?= $value->range_awal ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Range Awal" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Range Akhir</label>
							<input type="text" name="range_akhir" value="<?= $value->range_akhir ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Range Akhir" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Type Kriteria</label>
							<select class="form-control" name="type" id="exampleSelect1" required>
								<option value="">---Pilih Type Kriteria---</option>
								<option value="1" <?php if ($value->type == '1') {
														echo 'selected';
													} ?>>Absensi</option>
								<option value="2" <?php if ($value->type == '2') {
														echo 'selected';
													} ?>>Kedisiplinan Waktu</option>
								<option value="3" <?php if ($value->type == '3') {
														echo 'selected';
													} ?>>Hasil Kerja</option>
								<option value="4" <?php if ($value->type == '4') {
														echo 'selected';
													} ?>>Masa Kerja</option>
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
<?php
}
?>