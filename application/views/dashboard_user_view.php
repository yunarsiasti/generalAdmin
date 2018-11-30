
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
			<h1 class="nav-link" style="color:blue;"><?php echo $this->session->flashdata('message');?></h1>
			<h1 class="h2">ABSENSI</h1>
			</div>
			
			<?php
			echo form_open('DashboardUser/simpanKehadiran');//echo"<pre>";print_r($pegawai);echo"</pre>";die();
			?>
			<table class="table table-striped table-sm">
			<input type="hidden" name="start_time" class="form-control" value="<?php echo date('Y-m-d')?>">
			<input type="hidden" name="end_time" class="form-control" value="<?php echo date('Y-m-d')?>">
			<input type="hidden" name="counter" class="form-control" value=1>
			<input type="hidden" name="status" class="form-control" value="Setuju">
			<tr>
				<td width="130">Nama Pegawai</td>
				<td>
				<div class="col-sm-4"">
				<input type="hidden" name="pegawai" class="form-control" value="<?php echo $pegawai['id']?>">
				<input type="hidden" name="created_by" class="form-control" value="<?php echo $pegawai['nama']?>">
				<input type="text" name="nama_pegawai" class="form-control" disabled value="<?php echo $pegawai['nama']?>">
				</div>
				</td>
			</tr>
			<tr>
				<td width="130">Kehadiran</td>
				<td>
				<div class="col-sm-4"">
					<select name="kehadiran">
						<option value=1>Masuk</option>
						<option value=2>Ijin</option>
						<option value=3>Sakit</option>
						<option value=4>Alpha</option>
					</select>
				</div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
				<?php echo anchor('DashboardUser/showMasterLembur','Kembali',array('class'=>'btn btn-primary btn-sm'))?>
				</td>
			</tr>
			</table>
			</form>