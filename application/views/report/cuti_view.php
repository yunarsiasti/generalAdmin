
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">Report Cuti Pegawai</h1>
			</div>
			
			<?php
			echo form_open('KelolaCuti/simpanCuti');//echo"<pre>";print_r($detailpegawai);echo"</pre>";die();
			?>
			<table class="table table-striped table-sm">
			<tr>
				<td width="130">Nama Pegawai</td>
				<td>
				<div class="col-sm-4"">
				<input type="hidden" name="created_by" class="form-control" value="<?php echo $detailpegawai['nama']?>">
				<input type="hidden" name="counter" class="form-control" value=1>
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
				<td width="130">Kehadiran</td>
				<td>
				<div class="col-sm-4"">
					<input type="hidden" name="kehadiran" class="form-control" value="5">
					<input type="text" name="cuti" class="form-control" disabled value="Cuti">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Jumlah Cuti</td>
				<td>
				<div class="col-sm-4"">
					<input type="number" name="counter" class="form-control">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Tanggal Mulai Cuti</td>
				<td>
				<div class="col-sm-4"">
					<input type="date" min=<?php echo date('Y-m-d'); ?> name="start_time" class="form-control">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Tanggal Selesai Cuti</td>
				<td>
				<div class="col-sm-4"">
					<input type="date" min=<?php echo date('Y-m-d'); ?> name="end_time" class="form-control">
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
				<?php echo anchor('KelolaCuti/showMasterCuti','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>
			
			<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Jabatan</th>
					<th>Kehadiran</th>
					<th>Jumlah Cuti</th>
					<th>Tanggal Mulai Cuti</th>
					<th>Tanggal Selesai Cuti</th>
					<th>Pagu</th>
					<th>Diinput Oleh</th>
					<th>Status</th>
					<th colspan='4' style='text-align:center'>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no=1;
				$total=0;//echo"<pre>";print_r($kehadiran_pegawai);echo"</pre>";die();
				foreach ($kehadiran_pegawai as $r)
				{
					echo "<tr>
						<td>$no</td>
						<td>".anchor('KelolaMaster/detailPegawai/'.$r->id_pegawai,$r->nama)."</td>
						<!--td>$r->nama</td-->
						<td>$r->nama_jabatan</td>
						<td>$r->nama_kehadiran</td>
						<td>$r->counter</td>
						<td>$r->start_time</td>
						<td>$r->end_time</td>
						<td>$r->kebijakan</td>
						<td>$r->created_kehadiranPegawai</td>
						<td>$r->status</td>";
					if($r->id_jabatan==1 OR $r->id_jabatan==2 OR $r->id_jabatan==3 OR $r->id_jabatan==5){
						echo "
						<td>".anchor('KelolaCuti/editCutiSetuju/'.$r->id_kehadiranPegawai,'Setuju')."</td>
						<td>".anchor('KelolaCuti/editCutiTidakSetuju/'.$r->id_kehadiranPegawai,'TidakSetuju')."</td>
						<td>".anchor('KelolaCuti/hapusCuti/'.$r->id_kehadiranPegawai,'Hapus')."</td>
						<td></td></tr>
						";
					}else{
						echo"
						<td>".anchor('KelolaCuti/editCutiSetuju/'.$r->id_kehadiranPegawai,'Setuju')."</td>
						<td>".anchor('KelolaCuti/editCutiTidakSetuju/'.$r->id_kehadiranPegawai,'TidakSetuju')."</td>
						<td>".anchor('KelolaCuti/editCutiMenunggu/'.$r->id_kehadiranPegawai,'Menunggu')."</td>
						<td>".anchor('KelolaCuti/hapusCuti/'.$r->id_kehadiranPegawai,'Hapus')."</td></tr>
						";
					}
					$no++;
				}
				?>
			</tbody>
			</table>