
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Report Peminjaman Ruang Meeting</h1>
			</div>
			
			<?php
			echo form_open('KelolaRuangMeeting/simpanPeminjamanRuangMeeting');//echo"<pre>";print_r($pegawai);echo"</pre>";die();
			?>
			<table class="table table-striped table-sm">
			<tr>
				<td width="130">Nama Pegawai</td>
				<td>
				<div class="col-sm-4"">
				<input type="hidden" name="created_by" class="form-control" value="<?php echo $detailpegawai['nama']?>">
				<select name="pegawai">
				<?php
				foreach ($pegawai as $r)
				{
					echo "<option value='".$r->id_pegawai."'>".$r->nama."</option>";
				}
				?>
				</select>
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Nama Ruang Meeting</td>
				<td>
				<div class="col-sm-4"">
				<select name="ruangMeeting">
				<?php
				foreach ($ruangMeeting as $r)
				{
					echo "<option value='".$r->id."'>".$r->nama_ruangMeeting."</option>";
				}
				?>
				</select>
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Tanggal Mulai Peminjaman</td>
				<td>
				<div class="col-sm-4"">
					<input type="date" min=<?php echo date('Y-m-d'); ?> name="start_time" class="form-control">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Tanggal Selesai Peminjaman</td>
				<td>
				<div class="col-sm-4"">
					<input type="date" min=<?php echo date('Y-m-d'); ?> name="end_time" class="form-control">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Tujuan Penggunaan</td>
				<td>
					<input type="text" name="kebutuhan" class="form-control" placeholder="Tujuan Penggunaan">
				<div class="col-sm-4"">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Status</td>
				<td>
				<div class="col-sm-4"">
				<select name="status">
					<option value='Setuju'>Setuju</option>
					<option value='TidakSetuju'>TidakSetuju</option>
					<option value='Menunggu'>Menunggu</option>
				</select>
				</div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('KelolaRuangMeeting/showMasterRuangMeeting','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>
			
			<br>
			<h1 class="h3">Tanggal <?php echo date('Y-m-d'); ?> Jumlah Ruang Meeting Tersedia:
			<?php
			foreach ($ketersediaan_ruangMeeting as $r)
			{
				echo "$r->terpakai";
			}
			?>
			</h1>
			
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Pegawai</th>
					<th>Nama Ruang Meeting</th>
					<th>Tanggal Mulai Peminjaman</th>
					<th>Tanggal Selesai Peminjaman</th>
					<th>Tujuan Penggunaan</th>
					<th>Status</th>
					<th colspan='4' style='text-align:center'>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//echo"<pre>";print_r($ketersediaan_ruangMeeting);echo"</pre>";die();
				foreach ($peminjaman_ruangMeeting as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>$r->nama</td>
						<td>$r->nama_ruangMeeting</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td>
						<td>$r->kebutuhan</td>
						<td>$r->status</td>
						<td>".anchor('KelolaRuangMeeting/editPeminjamanRuangMeetingSetuju/'.$r->id_peminjamanRuangMeeting,'Setuju')."</td>
						<td>".anchor('KelolaRuangMeeting/editPeminjamanRuangMeetingTidakSetuju/'.$r->id_peminjamanRuangMeeting,'TidakSetuju')."</td>
						<td>".anchor('KelolaRuangMeeting/editPeminjamanRuangMeetingMenunggu/'.$r->id_peminjamanRuangMeeting,'Menunggu')."</td>
						<td>".anchor('KelolaRuangMeeting/hapusPeminjamanRuangMeeting/'.$r->id_peminjamanRuangMeeting,'Hapus')."</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>