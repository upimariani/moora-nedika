<!-- Required Jqurey -->
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/Jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Scrollbar JS-->
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/classie/classie.js"></script>

<!-- notification -->
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- Sparkline charts -->
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

<!-- Counter js  -->
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/countdown/js/jquery.counterup.js"></script>

<!-- Echart js -->
<script src="<?= base_url('asset/quantam-lite/') ?>assets/plugins/charts/echarts/js/echarts-all.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>

<!-- custom js -->
<script type="text/javascript" src="<?= base_url('asset/quantam-lite/') ?>assets/js/main.min.js"></script>
<script type="text/javascript" src="<?= base_url('asset/quantam-lite/') ?>assets/pages/dashboard.js"></script>
<script type="text/javascript" src="<?= base_url('asset/quantam-lite/') ?>assets/pages/elements.js"></script>
<script src="<?= base_url('asset/quantam-lite/') ?>assets/js/menu.min.js"></script>
<script src="<?= base_url() ?>asset/chart/Chart.js"></script>
<script src="<?= base_url('asset/') ?>datatables.min.js"></script>
<link href="<?= base_url('asset/') ?>/datatables.min.css" rel="stylesheet">
<script src="<?= base_url('asset/chart/js_chart.js') ?>"></script>
<script>
	$(document).ready(function() {
		$('#myTable').DataTable();
	});
</script>
<script>
	var $window = $(window);
	var nav = $('.fixed-button');
	$window.scroll(function() {
		if ($window.scrollTop() >= 200) {
			nav.addClass('active');
		} else {
			nav.removeClass('active');
		}
	});
</script>


<script>
	<?php
	$karyawan = $this->db->query("SELECT * FROM `analisis` JOIN karyawan ON karyawan.id_karyawan=analisis.id_karyawan WHERE tgl_proses='2022' ORDER BY hasil DESC LIMIT 3")->result();
	foreach ($karyawan as $key => $value) {
		$karyawan_analisis[] = $value->nama_karyawan;
		$hasil[] = $value->hasil;
	}
	?>
	var ctx = document.getElementById("karyawan");
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: <?= json_encode($karyawan_analisis) ?>,
			datasets: [{
				data: <?= json_encode($hasil) ?>,
				label: "Hasil Analisis Tahun 2022",
				backgroundColor: [
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)'
				],
				borderColor: [
					'rgba(201, 76, 76, 0.8)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)',
					'rgba(255, 99, 132, 0.80)',
					'rgba(54, 162, 235, 0.80)',
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
					'rgba(201, 76, 76, 0.3)',
					'rgba(201, 77, 77, 1)',
					'rgba(0, 140, 162, 1)',
					'rgba(158, 109, 8, 1)',
					'rgba(201, 76, 76, 0.8)',
					'rgba(0, 129, 212, 1)',
					'rgba(201, 77, 201, 1)',
					'rgba(255, 207, 207, 1)',
					'rgba(201, 77, 77, 1)',
					'rgba(128, 98, 98, 1)',
					'rgba(0, 0, 0, 1)',
					'rgba(128, 128, 128, 1)'
				],
				fill: false
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
</body>

</html>