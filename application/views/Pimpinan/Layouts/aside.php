<!-- Side-Nav-->
<aside class="main-sidebar hidden-print ">
	<section class="sidebar" id="sidebar-scroll">
		<!-- Sidebar Menu-->
		<ul class="sidebar-menu">
			<li class="nav-level">--- Navigation</li>
			<li class="<?php if ($this->uri->segment(1) == 'Pimpinan' && $this->uri->segment(2) == 'cDashboard') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Pimpinan/cDashboard') ?>">
					<i class="icon-speedometer"></i><span> Dashboard</span>
				</a>
			</li>

			<li class="nav-level">--- Analisis MOORA</li>

			<li class="<?php if ($this->uri->segment(1) == 'Pimpinan' && $this->uri->segment(2) == 'cAnalisis') {
							echo 'active';
						}  ?> treeview">
				<a class="waves-effect waves-dark" href="<?= base_url('Pimpinan/cAnalisis') ?>">
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
