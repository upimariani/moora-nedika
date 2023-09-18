<!-- Side-Nav-->
<aside class="main-sidebar hidden-print ">
	<section class="sidebar" id="sidebar-scroll">
		<!-- Sidebar Menu-->
		<ul class="sidebar-menu">
			<li class="nav-level">--- Navigation</li>
			<li class="<?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cDashboard') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Manager/cDashboard') ?>">
					<i class="icon-speedometer"></i><span> Dashboard</span>
				</a>
			</li>

			<li class="nav-level">--- Analisis MOORA</li>
			<li class="<?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cKriteria') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Manager/cKriteria') ?>">
					<i class="icon-reload"></i><span> Kriteria Perhitungan</span>
				</a>
			</li>
			<li class="<?php if ($this->uri->segment(1) == 'Manager' && $this->uri->segment(2) == 'cAnalisis') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Manager/cAnalisis') ?>">
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
