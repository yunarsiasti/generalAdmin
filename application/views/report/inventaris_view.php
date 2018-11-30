
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Report Peminjaman Inventaris</h1>
			</div>
			
			<?php
			echo form_open('KelolaInventaris/simpanPeminjamanInventaris');//echo"<pre>";print_r($pegawai);echo"</pre>";die();
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
				<td width="130">Nama Inventaris</td>
				<td>
				<div class="col-sm-4"">
				<select name="inventaris">
				<?php
				foreach ($inventaris as $r)
				{
					echo "<option value='".$r->id."'>".$r->nama_inventari."</option>";
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
				<div class="col-sm-4"">
					<input type="text" name="kebutuhan" class="form-control" placeholder="Tujuan Penggunaan">
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
				<?php echo anchor('KelolaInventaris/showMasterInventaris','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>
			
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Pegawai</th>
					<th>Nama Inventaris</th>
					<th>Kategori Inventaris</th>
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
				$total=0;//echo"<pre>";print_r($peminjaman_inventaris);echo"</pre>";die();
				foreach ($peminjaman_inventaris as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>$r->nama</td>
						<td>$r->nama_inventari</td>
						<td>$r->kategori</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td>
						<td>$r->kebutuhan</td>
						<td>$r->status</td>
						<td>".anchor('KelolaInventaris/editPeminjamanInventarisSetuju/'.$r->id_peminjamanInventari,'Setuju')."</td>
						<td>".anchor('KelolaInventaris/editPeminjamanInventarisTidakSetuju/'.$r->id_peminjamanInventari,'TidakSetuju')."</td>
						<td>".anchor('KelolaInventaris/editPeminjamanInventarisMenunggu/'.$r->id_peminjamanInventari,'Menunggu')."</td>
						<td>".anchor('KelolaInventaris/hapusPeminjamanInventaris/'.$r->id_peminjamanInventari,'Hapus')."</td></tr>";
					$no++;
				}
				?>
			</tbody>
			</table>