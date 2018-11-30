
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Detail Pegawai</h1>
			</div>
			
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Email</th>
					<th>Password</th>
					<th>Phone</th>
					<th>Jabatan</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//echo"<pre>"; print_r($jumlahCutiKehadiranPegawai); echo"</pre>"; die();
				?>
				<tr>
				<td>XLINK000<?php echo $pegawai['id']?></td>
				<td><?php echo $pegawai['nama']?></td>
				<td><?php echo $pegawai['alamat']?></td>
				<td><?php echo $pegawai['email']?></td>
				<td><?php echo $pegawai['password']?></td>
				<td><?php echo $pegawai['telp']?></td>
				<td><?php echo $nama_jabatan['nama_jabatan']?></td>
				</tr>
			</tbody>
			</table>
			
			<br>
			<h3>Report Kehadiran</h3>
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal Input</th>
					<th>Tanggal Mulai</th>
					<th>Tanggal Selesai</th>
					<th>Kehadiran</th>
					<th>Pagu</th>
					<th>Ketentuan Kehadiran</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;
				foreach ($kehadiranPegawai as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>$r->buildTime</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td>
						<td>$r->nama_kehadiran</td>
						<td>$r->kebijakan</td>
						<td>$r->ketentuan_kehadiran</td>
						<td>$r->status</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>
			
			<table class="table_small table-striped table-sm">
			<tr>
				<td>Total Cuti </td>
				<td> : </td>
				<?php
				foreach ($jumlahCutiKehadiranPegawai as $r)
				{
					echo "<td>&nbsp; $r->sum_cutipegawai</td>";
				}
				?>
				<td>&nbsp; &nbsp;</td>
				<td>Sisa Cuti </td>
				<td> : </td>
				<?php
				foreach ($sisaCutiKehadiranPegawai as $r)
				{
					echo "<td>&nbsp; $r->sum_sisacutipegawai</td>";
				}
				?>
			</tr>
			<tr>
				<td>Total Lembur </td>
				<td> : </td>
				<?php
				foreach ($jumlahLemburKehadiranPegawai as $r)
				{
					echo "<td>&nbsp; $r->sum_lemburpegawai</td>";
				}
				?>
				<td>&nbsp; &nbsp;</td>
				<td>Total Pagu Lembur</td>
				<td>:</td>
				<?php
				foreach ($totalLemburKehadiranPegawai as $r)
				{
					echo "<td>&nbsp; Rp $r->sum_totallemburpegawai</td>";
				}
				?>
			</tr>
			<tr>
				<td>Total Dinas Luar </td>
				<td> : </td>
				<?php
				foreach ($jumlahDinasLuarKehadiranPegawai as $r)
				{
					echo "<td>&nbsp; $r->sum_dinasluarpegawai</td>";
				}
				?>
				<td>&nbsp; &nbsp;</td>
				<td>Total Pagu Dinas Luar</td>
				<td>:</td>
				<?php
				foreach ($totalDinasLuarKehadiranPegawai as $r)
				{
					echo "<td>&nbsp; Rp $r->sum_totaldinasluarpegawai</td>";
				}
				?>
			</tr>
			</table>
			
			<br>
			<h3>Report Peminjaman Inventaris</h3>
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal Input</th>
					<th>Tanggal Mulai</th>
					<th>Tanggal Selesai</th>
					<th>Nama Inventaris</th>
					<th>Merk</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;
				foreach ($peminjamanInventaris as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>$r->modified_at</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td>
						<td>$r->nama_inventari</td>
						<td>$r->merk</td>
						<td>$r->status</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>
			
			<br>
			<h3>Report Peminjaman Ruang Meeting</h3>
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal Input</th>
					<th>Tanggal Mulai</th>
					<th>Tanggal Selesai</th>
					<th>Nama Ruang Meeting</th>
					<th>Fasilitas Ruang Meeting</th>
					<th>Tujuan Pemakaian</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;
				foreach ($peminjamanRuangMeeting as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>$r->modified_at</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td>
						<td>$r->nama_ruangMeeting</td>
						<td>$r->status_ruangMeeting</td>
						<td>$r->kebutuhan</td>
						<td>$r->status</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>