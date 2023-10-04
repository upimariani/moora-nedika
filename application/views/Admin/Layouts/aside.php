<!-- Side-Nav-->
<aside class="main-sidebar hidden-print ">
	<section class="sidebar" id="sidebar-scroll">
		<!-- Sidebar Menu-->
		<ul class="sidebar-menu">
			<li class="nav-level">--- Navigation</li>
			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cDashboard') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cDashboard') ?>">
					<i class="icon-speedometer"></i><span> Dashboard</span>
				</a>
			</li>
			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cUser') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cUser') ?>">
					<i class="icon-user"></i><span> User</span>
				</a>
			</li>
			<li class="nav-level">--- Informasi Karyawan</li>
			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cKaryawan') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cKaryawan') ?>">
					<i class="icon-people"></i><span> Karyawan</span>
				</a>
			</li>
			<li class="nav-level">--- Kriteria Analisis</li>

			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cAbsensi') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cAbsensi') ?>">
					<i class="icon-clock"></i><span> Absensi Karyawan</span>
				</a>
			</li>
			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cTargetKerja') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cTargetKerja') ?>">
					<i class="icon-handbag"></i><span> Target Kerja</span>
				</a>
			</li>
			<li class="nav-level">--- Analisis MOORA</li>

			<li class="<?php if ($this->uri->segment(1) == 'Admin' && $this->uri->segment(2) == 'cAnalisis') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Admin/cAnalisis') ?>">
					<i class="icon-list"></i><span> Analisis Karyawan</span>
				</a>
			</li>
			<li class="treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('cLogin/logout') ?>">
					<i class="icon-logout"></i><span> Logout</span>
				</a>
			</li>
		</ul>
	</section>
</aside>