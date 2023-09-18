<div class="content-wrapper">
	<!-- Container-fluid starts -->
	<div class="container-fluid">

		<!-- Header Starts -->
		<div class="row">
			<div class="col-sm-12 p-0">
				<div class="main-header">
					<h4>User</h4>
					<ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
						<li class="breadcrumb-item">
							<a href="index.html">
								<i class="icofont icofont-home"></i>
							</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="basic-table.html">User</a>
						</li>
					</ol>
					<button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
						Tambah Data User
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
						<h5 class="card-header-text">Informasi Data User</h5>
					</div>
					<div class="card-block">
						<div class="row">
							<div class="col-sm-12 table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama User</th>
											<th>Alamat</th>
											<th>No Telepon</th>
											<th>Username</th>
											<th>Password</th>
											<th>Level User</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($user as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->nama_user ?></td>
												<td><?= $value->alamat ?></td>
												<td><?= $value->no_hp ?></td>
												<td><?= $value->username ?></td>
												<td><?= $value->password ?></td>
												<td><?php if ($value->level_user == '1') {
													?>
														<label class="label bg-success">HRD</label>
													<?php
													} else if ($value->level_user == '2') {
													?>
														<label class="label bg-warning">Kepala Pabrik</label>
													<?php
													} else if ($value->level_user == '3') {
													?>
														<label class="label bg-info">Manager</label>
													<?php
													} ?>
												</td>
												<td> <a href="<?= base_url('Admin/cUser/delete/' . $value->id_user) ?>" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Hapus">
														<i class="icofont icofont-trash"></i>
													</a>
													<button type="button" data-toggle="modal" data-target="#edit<?= $value->id_user ?>" class="btn btn-warning btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
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
		<form action="<?= base_url('Admin/cUser/create') ?>" method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Data User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputEmail1" class="form-control-label">Nama User</label>
						<input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama User" required>
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
						<label for="exampleInputPassword1" class="form-control-label">Username</label>
						<input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Username" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Password</label>
						<input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" required>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="form-control-label">Level User</label>
						<select class="form-control" name="level" id="exampleSelect1" required>
							<option value="">---Pilih Level User---</option>
							<option value="1">HRD</option>
							<option value="2">Kepala Pabrik</option>
							<option value="3">Manager</option>
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
foreach ($user as $key => $value) {
?>
	<div class="modal fade" id="edit<?= $value->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="<?= base_url('Admin/cUser/update/' . $value->id_user) ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Data User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1" class="form-control-label">Nama User</label>
							<input type="text" value="<?= $value->nama_user ?>" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama User" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Alamat</label>
							<input type="text" value="<?= $value->alamat ?>" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Alamat" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">No Telepon</label>
							<input type="text" value="<?= $value->no_hp ?>" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No Telepon" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Username</label>
							<input type="text" value="<?= $value->username ?>" name="username" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Username" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Password</label>
							<input type="text" value="<?= $value->password ?>" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="form-control-label">Level User</label>
							<select class="form-control" name="level" id="exampleSelect1" required>
								<option value="">---Pilih Level User---</option>
								<option value="1" <?php if ($value->level_user == '1') {
														echo 'selected';
													} ?>>HRD</option>
								<option value="2" <?php if ($value->level_user == '2') {
														echo 'selected';
													} ?>>Kepala Pabrik</option>
								<option value="3" <?php if ($value->level_user == '3') {
														echo 'selected';
													} ?>>Manager</option>
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
