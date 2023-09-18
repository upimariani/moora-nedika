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

		<!-- 1-3-block row start -->
		<div class="row">

			<div class="col-lg-8">
				<div class="card">
					<div class="card-header">
						<h5 class="card-header-text">Grafik Presentasi Kriteria Karyawan</h5>
					</div>
					<div class="card-block">
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>

		</div>
		<!-- 1-3-block row end -->


	</div>

</div>
</div>
