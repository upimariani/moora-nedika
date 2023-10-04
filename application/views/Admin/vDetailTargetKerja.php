<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Target Kerja Karyawan</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Target Kerja Karyawan</a>
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
			<div class="col-sm-8">
				<!-- Basic Table starts -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">Informasi Target Kerja Karyawan</h5>
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-sm-6 table-responsive">
								<table id="myTable" class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Karyawan</th>
											<th>Tanggal Absen</th>
											<th>Status Target Kerja</th>
											<th>Time</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($target as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->nama_karyawan ?></td>
												<td><?= $value->tgl_kerja ?></td>
												<td><?php if ($value->status_target == '1') {
													?>
														<span class="badge badge-danger">Tidak Sesuai Target</span>
													<?php
													} else if ($value->status_target == '2') {
													?>
														<span class="badge badge-success">Sesuai Target</span>
													<?php
													}  ?>
												</td>
												<td><?= $value->time ?></td>
												<td> <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-toggle="modal" data-target="#edit<?= $value->id_target_kerja ?>">
														<i class="icofont icofont-edit"></i>
													</button>
													<a href="<?= base_url('Admin/cTargetKerja/delete/' . $value->id_target_kerja) ?>" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Hapus">
														<i class="icofont icofont-trash"></i>
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

<?php
foreach ($target as $key => $value) {
?>
	<!-- Modal -->
	<div class="modal fade" id="edit<?= $value->id_target_kerja ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('Admin/cTargetKerja/update/' . $value->id_target_kerja) ?>" method="POST">
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
								foreach ($karyawan as $key => $item) {
								?>
									<option value="<?= $item->id_karyawan ?>" <?php if ($item->id_karyawan == $value->id_karyawan) {
																					echo 'selected';
																				} ?>><?= $item->nama_karyawan ?></option>
								<?php
								}
								?>

							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Tanggal Kerja</label>
							<input type="date" value="<?= $value->tgl_kerja ?>" name="tgl" class="form-control" id="exampleInputPassword1" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Status Target Kerja</label>
							<select class="form-control" name="status" id="exampleSelect1" required>
								<option value="">---Pilih Status Target Kerja---</option>
								<option value="1" <?php if ($value->status_target == '1') {
														echo 'selected';
													} ?>>Tidak Sesuai Target</option>
								<option value="2" <?php if ($value->status_target == '2') {
														echo 'selected';
													} ?>>Sesuai Target</option>
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