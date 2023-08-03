<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>Karyawan</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">Karyawan</a>
						</li>
					</ol>
					<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
						Tambah Data Karyawan
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
						<h5 class="card-header-text">Informasi Karyawan</h5>
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-sm-12 table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Karyawan</th>
											<th>Jenis Kelamin</th>
											<th>No Telepon</th>
											<th>Alamat</th>
											<th>Divisi</th>
											<th>Jabatan</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($karyawan as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->nama_karyawan ?></td>
												<td><?= $value->jk ?></td>
												<td><?= $value->no_hp_karyawan ?></td>
												<td><?= $value->alamat_karyawan ?></td>
												<td><?= $value->divisi ?></td>
												<td><?= $value->jabatan ?></td>
												<td> <a href="<?= base_url('Admin/cKaryawan/delete/' . $value->id_karyawan) ?>" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".icofont-code-alt">
														<i class="icofont icofont-trash"></i>
													</a>
													<button type="button" data-toggle="modal" data-target="#edit<?= $value->id_karyawan ?>" class="btn btn-warning btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".icofont-code-alt">
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
		<form action="<?= base_url('Admin/cKaryawan/create') ?>" method="POST">
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
						<input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Karyawan" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Jenis Kelamin</label>
						<select class="form-control" name="jk" id="exampleSelect1" required>
							<option value="">---Pilih Jenis Kelamin---</option>
							<option value="Perempuan">Perempuan</option>
							<option value="Laki - Laki">Laki - Laki</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Alamat</label>
						<input type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">No Telepon</label>
						<input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Divisi</label>
						<input type="text" name="divisi" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Divisi" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Jabatan</label>
						<input type="text" name="jabatan" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jabatan" required>
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
foreach ($karyawan as $key => $value) {
?>
	<!-- Modal -->
	<div class="modal fade" id="edit<?= $value->id_karyawan ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('Admin/cKaryawan/update/' . $value->id_karyawan) ?>" method="POST">
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
							<input type="text" value="<?= $value->nama_karyawan ?>" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Karyawan" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Jenis Kelamin</label>
							<select class="form-control" name="jk" id="exampleSelect1" required>
								<option value="">---Pilih Jenis Kelamin---</option>
								<option value="Perempuan" <?php if ($value->jk == 'Perempuan') {
																echo 'selected';
															} ?>>Perempuan</option>
								<option value="Laki - Laki" <?php if ($value->jk == 'Laki - Laki') {
																echo 'selected';
															} ?>>Laki - Laki</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Alamat</label>
							<input type="text" name="alamat" value="<?= $value->alamat_karyawan ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">No Telepon</label>
							<input type="text" name="no_hp" value="<?= $value->no_hp_karyawan ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Divisi</label>
							<input type="text" name="divisi" value="<?= $value->divisi ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Divisi" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Jabatan</label>
							<input type="text" name="jabatan" value="<?= $value->jabatan ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Jabatan" required>
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