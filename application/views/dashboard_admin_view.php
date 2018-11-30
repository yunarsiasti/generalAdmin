
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="h2">Dashboard</h1>
			</div>
			<h2>Grafik Kehadiran Bulan Berjalan</h2>
			<canvas class="my-4 w-100" id="myChartBulan" width="900" height="380"></canvas>
			
			<h2>Report Kehadiran Bulan Berjalan</h2>
			<div class="table-responsive">
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Kehadiran</th>
					<th>Jumlah Total Kehadiran</th>
					<th>Ketentuan Perhitungan Kehadiran</th>
					<th>Tanggal Awal</th>
					<th>Tanggal Akhir</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//echo"<pre>";print_r($kehadiran_pegawai);echo"</pre>";die();
				foreach ($kehadiran_pegawai_bulan as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td><a class='nav-link' href='KelolaMaster/showMasterPegawai'>$r->nama_kehadiran</a></td>
						<td>$r->count_kehadiran</td>
						<td>$r->ketentuan_kehadiran</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td></tr>";
					$no++;
				}
				?>
				<?php
				foreach ($sum_kehadiran_pegawai_bulan as $r)
				{
					echo "<tr>
						<td colspan='2'>Total Kehadiran</td>
						<td colspan='4'>$r->sum_kehadiran</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>
			</div>
			
			<h2>Grafik Kehadiran Tahun Berjalan</h2>
			<canvas class="my-4 w-100" id="myChartTahun" width="900" height="380"></canvas>
			
			<h2>Report Kehadiran Tahun Berjalan</h2>
			<div class="table-responsive">
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Kehadiran</th>
					<th>Jumlah Total Kehadiran</th>
					<th>Ketentuan Perhitungan Kehadiran</th>
					<th>Tanggal Awal</th>
					<th>Tanggal Akhir</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//echo"<pre>";print_r($kehadiran_pegawai);echo"</pre>";die();
				foreach ($kehadiran_pegawai_tahun as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td><a class='nav-link' href='KelolaMaster/showMasterPegawai'>$r->nama_kehadiran</a></td>
						<td>$r->count_kehadiran</td>
						<td>$r->ketentuan_kehadiran</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td></tr>";
					$no++;
				}
				?>
				<?php
				foreach ($sum_kehadiran_pegawai_tahun as $r)
				{
					echo "<tr>
						<td colspan='2'>Total Kehadiran</td>
						<td colspan='4'>$r->sum_kehadiran</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>
			</div>
			
			<br/>
			<h2>Grafik Inventaris Bulan Berjalan</h2>
			<canvas class="my-4 w-100" id="myChart1Bulan" width="900" height="380"></canvas>
			
			<h2>Report Inventaris Bulan Berjalan</h2>
			<div class="table-responsive">
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Inventaris</th>
					<th>Jumlah Total Peminjaman</th>
					<th>Tanggal Awal</th>
					<th>Tanggal Akhir</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//echo"<pre>";print_r($peminjaman_inventaris);echo"</pre>";die();
				foreach ($peminjaman_inventaris_bulan as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td><a class='nav-link' href='KelolaInventaris/showMasterInventaris'>$r->nama_inventari</a></td>
						<td>$r->count_inventari</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td></tr>";
					$no++;
				}
				?>
				<?php
				foreach ($sum_peminjaman_inventaris_bulan as $r)
				{
					echo "<tr>
						<td colspan='2'>Total Peminjaman</td>
						<td colspan='4'>$r->sum_peminjaman</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>
			</div>
			
			<h2>Grafik Inventaris Tahun Berjalan</h2>
			<canvas class="my-4 w-100" id="myChart1Tahun" width="900" height="380"></canvas>
			
			<h2>Report Inventaris Tahun Berjalan</h2>
			<div class="table-responsive">
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Inventaris</th>
					<th>Jumlah Total Peminjaman</th>
					<th>Tanggal Awal</th>
					<th>Tanggal Akhir</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//echo"<pre>";print_r($peminjaman_inventaris);echo"</pre>";die();
				foreach ($peminjaman_inventaris_tahun as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td><a class='nav-link' href='KelolaInventaris/showMasterInventaris'>$r->nama_inventari</a></td>
						<td>$r->count_inventari</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td></tr>";
					$no++;
				}
				?>
				<?php
				foreach ($sum_peminjaman_inventaris_tahun as $r)
				{
					echo "<tr>
						<td colspan='2'>Total Peminjaman</td>
						<td colspan='4'>$r->sum_peminjaman</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>
			</div>
			
			<br/>
			<h2>Grafik Peminjaman Ruang Meeting Bulan Berjalan</h2>
			<canvas class="my-4 w-100" id="myChart2Bulan" width="900" height="380"></canvas>
			
			<h2>Report Peminjaman Ruang Meeting Bulan Berjalan</h2>
			<div class="table-responsive">
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Ruang Meeting</th>
					<th>Jumlah Total Peminjaman</th>
					<th>Tanggal Awal</th>
					<th>Tanggal Akhir</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//echo"<pre>";print_r($peminjaman_ruangMeeting);echo"</pre>";die();
				foreach ($peminjaman_ruangMeeting_bulan as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td><a class='nav-link' href='KelolaRuangMeeting/showMasterRuangMeeting'>$r->nama_ruangMeeting</a></td>
						<td>$r->count_ruangMeeting</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td></tr>";
					$no++;
				}
				?>
				<?php
				foreach ($sum_peminjaman_ruangMeeting_bulan as $r)
				{
					echo "<tr>
						<td colspan='2'>Total Peminjaman</td>
						<td colspan='4'>$r->sum_peminjaman</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>
			</div>
			
			<h2>Grafik Peminjaman Ruang Meeting Tahun Berjalan</h2>
			<canvas class="my-4 w-100" id="myChart2Tahun" width="900" height="380"></canvas>
			
			<h2>Report Peminjaman Ruang Meeting Tahun Berjalan</h2>
			<div class="table-responsive">
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Ruang Meeting</th>
					<th>Jumlah Total Peminjaman</th>
					<th>Tanggal Awal</th>
					<th>Tanggal Akhir</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//echo"<pre>";print_r($peminjaman_ruangMeeting);echo"</pre>";die();
				foreach ($peminjaman_ruangMeeting_tahun as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td><a class='nav-link' href='KelolaRuangMeeting/showMasterRuangMeeting'>$r->nama_ruangMeeting</a></td>
						<td>$r->count_ruangMeeting</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td></tr>";
					$no++;
				}
				?>
				<?php
				foreach ($sum_peminjaman_ruangMeeting_tahun as $r)
				{
					echo "<tr>
						<td colspan='2'>Total Peminjaman</td>
						<td colspan='4'>$r->sum_peminjaman</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>
			</div>
			
	<!-- Graphs -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
	<script>
		var ctx = document.getElementById("myChartBulan");
		var myChartBulan = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: 
				<?php
					echo "[";
					foreach ($kehadiran_pegawai_bulan as $r)
					{
						echo "'$r->nama_kehadiran',";
						$no++;
					}
					echo "]";
					//echo "['Masuk', 'Dinas Luar', 'Lembur', 'Cuti', 'Sakit']";
				?>,
			datasets: [{
			data: <?php
					echo "[";
					foreach ($kehadiran_pegawai_bulan as $r)
					{
						echo "'$r->count_kehadiran',";
						$no++;
					}
					echo "]";
				?>,
			backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
			hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
			}]
		},
		options: {
			responsive: true
		}
		});
		
		var ctx = document.getElementById("myChartTahun");
		var myChartTahun = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: 
				<?php
					echo "[";
					foreach ($kehadiran_pegawai_tahun as $r)
					{
						echo "'$r->nama_kehadiran',";
						$no++;
					}
					echo "]";
					//echo "['Masuk', 'Dinas Luar', 'Lembur', 'Cuti', 'Sakit']";
				?>,
			datasets: [{
			data: <?php
					echo "[";
					foreach ($kehadiran_pegawai_tahun as $r)
					{
						echo "'$r->count_kehadiran',";
						$no++;
					}
					echo "]";
				?>,
			backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
			hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
			}]
		},
		options: {
			responsive: true
		}
		});
		
		<!-- PIE -->
		
		//var ctxP = document.getElementById("myChart").getContext('2d');
		//var myChart = new Chart(ctxP, {
		//	type: 'pie',
		//	data: {
		//		labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
		//		datasets: [
		//			{
		//				data: [300, 50, 100, 40, 120],
		//				backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
		//				hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
		//			}
		//		]
		//	},
		//	options: {
		//		responsive: true
		//	}
		//});
		
		<!-- LINE | BAR -->
		//var ctx1 = document.getElementById("myChart1");
		//var myChart1 = new Chart(ctx1, {
		//type: 'line',
		//data: {
		//	labels: 
		//		<?php
		//			echo "[";
		//			foreach ($peminjaman_inventaris as $r)
		//			{
		//				echo "'$r->nama_inventari',";
		//				$no++;
		//			}
		//			echo "]";
		//		?>,
		//	datasets: [{
		//	data: <?php
		//			echo "[";
		//			foreach ($peminjaman_inventaris as $r)
		//			{
		//				echo "'$r->count_inventari',";
		//				$no++;
		//			}
		//			echo "]";
		//		?>,
		//	lineTension: 0,
		//	backgroundColor: 'transparent',
		//	borderColor: '#007bff',
		//	borderWidth: 4,
		//	pointBackgroundColor: '#007bff'
		//	}]
		//},
		//options: {
		//	scales: {
		//	yAxes: [{
		//		ticks: {
		//		beginAtZero: false
		//		}
		//	}]
		//	},
		//	legend: {
		//	display: false,
		//	}
		//}
		//});
		
		var ctx1 = document.getElementById("myChart1Bulan");
		var myChart1Bulan = new Chart(ctx1, {
		type: 'pie',
		data: {
			labels: 
				<?php
					echo "[";
					foreach ($peminjaman_inventaris_bulan as $r)
					{
						echo "'$r->nama_inventari',";
						$no++;
					}
					echo "]";
				?>,
			datasets: [{
			data: <?php
					echo "[";
					foreach ($peminjaman_inventaris_bulan as $r)
					{
						echo "'$r->count_inventari',";
						$no++;
					}
					echo "]";
				?>,
			backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
			hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
			}]
		},
		options: {
			responsive: true
		}
		});
		
		var ctx1 = document.getElementById("myChart1Tahun");
		var myChart1Tahun = new Chart(ctx1, {
		type: 'pie',
		data: {
			labels: 
				<?php
					echo "[";
					foreach ($peminjaman_inventaris_tahun as $r)
					{
						echo "'$r->nama_inventari',";
						$no++;
					}
					echo "]";
				?>,
			datasets: [{
			data: <?php
					echo "[";
					foreach ($peminjaman_inventaris_tahun as $r)
					{
						echo "'$r->count_inventari',";
						$no++;
					}
					echo "]";
				?>,
			backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
			hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
			}]
		},
		options: {
			responsive: true
		}
		});
		
		<!---->
		var ctx2 = document.getElementById("myChart2Bulan");
		var myChart2Bulan = new Chart(ctx2, {
		type: 'pie',
		data: {
			labels: 
				<?php
					echo "[";
					foreach ($peminjaman_ruangMeeting_bulan as $r)
					{
						echo "'$r->nama_ruangMeeting',";
						$no++;
					}
					echo "]";
				?>,
			datasets: [{
			data: <?php
					echo "[";
					foreach ($peminjaman_ruangMeeting_bulan as $r)
					{
						echo "'$r->count_ruangMeeting',";
						$no++;
					}
					echo "]";
				?>,
			backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
			hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
			}]
		},
		options: {
			responsive: true
		}
		});
		
		var ctx2 = document.getElementById("myChart2Tahun");
		var myChart2Tahun = new Chart(ctx2, {
		type: 'pie',
		data: {
			labels: 
				<?php
					echo "[";
					foreach ($peminjaman_ruangMeeting_tahun as $r)
					{
						echo "'$r->nama_ruangMeeting',";
						$no++;
					}
					echo "]";
				?>,
			datasets: [{
			data: <?php
					echo "[";
					foreach ($peminjaman_ruangMeeting_tahun as $r)
					{
						echo "'$r->count_ruangMeeting',";
						$no++;
					}
					echo "]";
				?>,
			backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
			hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
			}]
		},
		options: {
			responsive: true
		}
		});
	</script>
