<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">
	
	<title>SI General Affair</title>
	
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Custom styles for this template -->
	<link href="dashboard.css" rel="stylesheet">
	<!--script type="text/javascript" src="https://ff.kis.v2.scr.kaspersky-labs.com/AC8D7CE9-E411-4344-841E-44F05CA81AFC/main.js" charset="UTF-8"></script-->
	</head>
	
	<body>
	<!-- Static navbar -->
	<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"><img src="<?php echo base_url();?>assets/images/xlinkLogo.png" width="30" height="30"> Sistem Informasi Pengelolaan Administrasi Umum</a>
		</div>
		<div class="navbar-collapse collapse">
		<ul class="nav navbar-nav navbar-right">
			<li class="acttive"><?php echo anchor('Login/logout','Logout');?></li></li>
		</ul>
		</div><!--/.nav-collapse -->
	</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
		<nav class="navbar navbar-default col-md-2 d-none d-md-block bg-light sidebar">
			<div class="sidebar-sticky">
			<ul class="nav flex-column">
				<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>index.php/DashboardUser">
					<span data-feather="home"></span>
					Dashboard
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>index.php/KelolaLemburUser/showMasterLembur">
					<span data-feather="watch"></span>
					Request Lembur
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>index.php/KelolaCutiUser/showMasterCuti">
					<span data-feather="bar-chart-2"></span>
					Request Cuti
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>index.php/KelolaCutiUser/showMasterCutiMelahirkan">
					<span data-feather="bar-chart-2"></span>
					Request Cuti Melahirkan
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>index.php/KelolaDinasLuarUser/showMasterDinasLuar">
					<span data-feather="layers"></span>
					Request Dinas Luar
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>index.php/KelolaInventarisUser/showMasterInventaris">
					<span data-feather="server"></span>
					Request Peminjaman Inventaris
				</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>index.php/KelolaRuangMeetingUser/showMasterRuangMeeting">
					<span data-feather="file-text"></span>
					Request Peminjaman Ruang Meeting
				</a>
				</li>
			</ul>
			</div>
		</nav>
	
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<?php echo $contents;?>
		</main>
		</div>
	</div>
	
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
	<!--script src="../../assets/js/vendor/popper.min.js"></script-->
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	
	<!-- Icons -->
	<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
	<script>
		feather.replace()
	</script>
	
	<!-- Graphs -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
	<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
			datasets: [{
			data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
			lineTension: 0,
			backgroundColor: 'transparent',
			borderColor: '#007bff',
			borderWidth: 4,
			pointBackgroundColor: '#007bff'
			}]
		},
		options: {
			scales: {
			yAxes: [{
				ticks: {
				beginAtZero: false
				}
			}]
			},
			legend: {
			display: false,
			}
		}
		});
	</script>
	
	</body>
</html>
